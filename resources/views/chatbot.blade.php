<!DOCTYPE html>
<html>
<head>
    <title>Chatbot</title>
</head>
<body>
    <h1>Chatbot</h1>
    
    <div id="chat">
        <div id="respuesta"></div>
        <input type="text" id="pregunta" placeholder="Haz una pregunta...">
        <button onclick="enviarPregunta()">Enviar</button>
    </div>

    <script>
        function enviarPregunta() {
            var pregunta = document.getElementById('pregunta').value;

            fetch('/responder-pregunta', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ pregunta: pregunta })
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('respuesta').innerText = data.respuesta;
            });
        }
    </script>
</body>
</html>
