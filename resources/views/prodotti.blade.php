@extends('layouts.app')

@section('title', 'La molisana | Prodotti')

@section('content')
    <div id="brand-main">
        <div class="container">
            <div class="row card-container">

                @foreach ($formati as $type_pasta => $all_pasta_type)
                    <!-- type of pasta - title -->
                    <h2>{{ $type_pasta }}</h2>

                    <!-- pasta card -->
                    @foreach ($all_pasta_type as $index => $formato)
                        <div class="col-xs-12 col-md-4">
                            <div class="card">
                                <div class="img-container">
                                    <img src="{{ $formato['src'] }}" alt="{{ 'tipo di pasta ' . $formato['titolo'] }}">
                                </div>
                                <a class="card-overlay"
                                    href="{{ url('http://localhost:8000/prodotti/' . $index) }}">
                                    {{ $formato['titolo'] }}
                                </a>
                            </div><!-- end card -->
                        </div><!-- end card-container -->
                    @endforeach
                @endforeach
            </div>
        </div><!-- end container -->
    </div><!-- end wrapper -->
@endsection
