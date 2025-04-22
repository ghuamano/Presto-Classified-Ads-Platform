<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body style="margin: 0; padding: 0; background-color: #f9f9f9;">
    <div class="email-container">
        <h1 class="email-header">
            Richiesta per diventare revisore
        </h1>

        <div class="email-content">

            <p>Ciao <strong> {{ $user->name }}</strong></p>

            <p>grazie per il tuo interesse a diventare un Revisore di Annunci sulla nostra piattaforma!</p>

            <p>
                Abbiamo ricevuto la tua richiesta e la stiamo attualmente valutando. Il tuo contributo potrebbe essere
                molto prezioso per aiutare la nostra community a mantenere annunci di qualità, pertinenti e sicuri per
                tutti.
            </p>

            <p>
                Ti contatteremo a breve con ulteriori dettagli riguardo i prossimi passi, che includeranno una breve
                guida sul processo di revisione e le regole da seguire.</p>

            <p>
                Grazie ancora per la tua disponibilità e il tuo supporto!</p>
            <p>
                Un caro saluto, 
            </p>

            <p>
                Il Team di <a class="text-decoration-none" href="{{route('homepage')}}"><strong>{{ config('app.name') }}</strong></a>
            </p>

        </div>
        <div class="email-footer">
            <p>Inviato da <a class="text-decoration-none textColor" href="{{route('homepage')}}"> <strong>{{ config('app.name') }}</strong></a> </p>
        </div>
    </div>
</body>

</html>
