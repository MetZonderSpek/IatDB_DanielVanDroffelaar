@extends('default')
@section('content')
<header>
    <h1>Welkom {{$user->name}}!</h1>
</header>

<article>
    <h3>Mijn oppas aanvragen</h3>
    <ul>
        @foreach($dier as $dier)
            @include('components.animalCard--lijst')
        @endforeach
    </ul>
    <a href="/maakdier">Voeg een huisdier toe!</a>
</article>

<article>
    <h3>Gekregen oppas verzoeken</h3>
    <ul>
        @foreach($verzoek as $verzoek)
            @include('components.verzoek')
        @endforeach
    </ul>
    
</article>


@endsection