<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RebajasController extends Controller
{
    public function index()
    {
        return view('rebajas');
    }
    public function __construct()
{
    $this->middleware('auth');
}

}
