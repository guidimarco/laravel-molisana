@extends('layouts.app')

@section('title', 'La molisana | ' . $this_formato['titolo'])

@section('content')
    <div id="scheda-prodotto">
        <!-- left: split to prev scheda-prodotto -->
        <a class="arrow arrow-left"
            href="{{ route("scheda-prodotto", ["id" => $prev_id]) }}">
            <div class="top">
                <!-- left img -->
                <div class="img-container">
                    <img src="{{ $prev_formato['src'] }}" alt="{{ $prev_formato['titolo'] }}">
                </div>

                <!-- right img -->
                <span class="arrow-symb">
                    &larr;
                </span>
            </div>

            <!-- btm img -->
            <div class="next-title">
                <span>{{ $prev_formato['titolo'] }}</span>
            </div>
        </a>

        <!-- product info container -->
        <div class="container">
            <h1>{{ $this_formato['titolo'] }}</h1>

            <img src="{{ $this_formato['src-h'] }}" alt="{{ "immagine prodotto: " . $this_formato['titolo'] }}">
            <img src="{{ $this_formato['src-p'] }}" alt="{{ "immagine pacco pasta: " . $this_formato['titolo'] }}">

            <p>
                {!! $this_formato['descrizione'] !!}
            </p>
        </div>

        <!-- right: split to prev scheda-prodotto -->
        <a class="arrow arrow-right"
            href="{{ route("scheda-prodotto", ["id" => $next_id]) }}">
            <div class="top">
                <!-- left arrow -->
                <span class="arrow-symb">
                    &rarr;
                </span>

                <!-- right img -->
                <div class="img-container">
                    <img src="{{ $next_formato['src'] }}" alt="{{ $next_formato['titolo'] }}">
                </div>
            </div>

            <!-- btm img -->
            <div class="next-title">
                <span>{{ $next_formato['titolo'] }}</span>
            </div>
        </a>
    </div>
@endsection
