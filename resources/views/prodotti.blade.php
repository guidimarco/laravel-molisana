@extends('layouts.app')

@section('title', 'La molisana | Prodotti')

@section('content')
    <div class="container">
        <div class="row card-container">

            @foreach ($formati as $type_pasta => $all_pasta_type)
                <!-- type of pasta - title -->
                <h2>{{ $type_pasta }}</h2>

                <!-- pasta card -->
                @foreach ($all_pasta_type as $formato)
                    <div class="col-xs-12 col-md-4">
                        <div class="card">
                            <div class="img-container">
                                <img src="{{ $formato['src'] }}" alt="{{ 'tipo di pasta ' . $formato['titolo'] }}">
                            </div>
                            <div class="card-overlay">
                                {{ $formato['titolo'] }}
                            </div>
                        </div><!-- end card -->
                    </div><!-- end card-container -->
                @endforeach
            @endforeach

        </div>
    </div>
@endsection
