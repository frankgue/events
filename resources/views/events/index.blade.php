<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Events</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

    </head>
    <body>
        <h1> {{ count($events) }} Events</h1>
        @foreach($events as $event)
            <article>
                <h1>Nom de l'offre : {{ $event->name}}</h1>
                <p>Description : {{ $event->description}}</p>
                <p>Prix : {!! App\Helpers\EventsHelper::formatPrice($event) !!} </p>
                <p><strike>Prix : {{ $event->fake_price}} euros</strike></p>
                <p>Lieu : {{ $event->location}}</p>
                <p>Date : {{ App\Helpers\EventsHelper::formatDate($event->start_at) }}</p>
            </article>
            <hr>
        @endforeach

    </body>
</html>
