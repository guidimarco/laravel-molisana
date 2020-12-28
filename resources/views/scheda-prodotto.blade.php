@extends('layouts.app')

@section('title', 'La molisana | ' . $this_formato['titolo'])

@section('content')
    <div id="scheda-prodotto">
        <!-- left: split to prev scheda-prodotto -->
        <a class="arrow arrow-left"
            href="#">
            <span>
                &larr;
            </span>
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

        <!-- right: split to next scheda-prodotto -->
        <a class="arrow arrow-right"
            href="#">
            <span>
                &rarr;
            </span>
        </a>
    </div>
@endsection
