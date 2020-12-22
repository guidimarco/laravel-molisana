@extends('layouts.app')

@section('title', 'La molisana | Prodotti')

@section('content')
    <div class="container">
        <div class="row card-container">

            @foreach ($formati as $formato)
                <div class="col-xs-12 col-md-4">
                    <div class="card">
                        <img src="{{ $formato['src'] }}" alt="{{ 'tipo di pasta ' . $formato['titolo'] }}">
                        <div class="card-overlay">
                            {{ $formato['titolo'] }}
                        </div>
                    </div><!-- end card -->
                </div><!-- end card-container -->
            @endforeach


        </div>
    </div>
@endsection
