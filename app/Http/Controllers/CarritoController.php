<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $productos = Producto::with('categoria:id,nombre')->paginate(5);
        //$productos = Producto::all();
        //$productos = Producto::paginate(5);
        //dd($producto);
        return view('productos.index', ['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view ('productos.create',['categorias'=>$categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'cantidad' => 'required|integer',
            'imagen'=> 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $categoriaSeleccionada = $request->input('categoria');
    $categoriaYaSeleccionada = Producto::where('categoria_id', $categoriaSeleccionada)->exists();

    if ($categoriaYaSeleccionada) {
        return redirect()->back()->withErrors(['categoria' => 'La categoría ya ha sido seleccionada previamente.'])->withInput();
    }

    $producto = Producto::create([
        'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'cantidad' => $request->cantidad,
            'imagen' => $request->imagen
    ]);

    session()->flash('status', 'Se guardó el producto ' . $request->nombre);
    return redirect()->route('ProductosIndex')->with('success', 'Producto almacenado exitosamente.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::findOrFail($id); 
         return view('view.blade', ['productos' => $producto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::find($id);
        return view('productos.edit',['producto'=>$producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'cantidad' => 'required|integer',
            'imagen'=> 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $producto = Producto::find($id);
        if($producto)
        {
            $producto->nombre = $request->input('nombre');
            $producto->descripcion = $request->input('descripcion');
            $producto->fecha = $request->input('precio');
            $producto->precio = $request->input('cantidad');
            $producto->color = $request->input('imagen');

            $producto->save();
        }
        session()->flash('status','Se actualizo el producto '.$request->nombre);
        return to_route('ProductosIndex');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::find($id);
        if($producto)
        {
            $producto->delete();
        }
        session()->flash('status','Se elimino el producto ');
        return to_route('ProductosIndex');
    }
}