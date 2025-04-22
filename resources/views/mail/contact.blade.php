<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body style="margin: 0; padding: 0; background-color: #f9f9f9;">
    <div class="email-container">
        <h1 class="email-header">Hai ricevuto un nuovo messaggio</h1>
        <h2>Ecco i suoi dati: </h2>
        <div class="email-content">
            <p><strong>Nome:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Messaggio:</strong></p>
            <p>{{ $data['message'] }}</p>
        </div>
        <div class="email-footer">
            <p>Inviato da Presto.it</p>
        </div>
    </div>
</body>

</html>
