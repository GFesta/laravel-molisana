@extends('layouts.app')

@section('content')
    <div class="prodotti">
        <div class="container">
            @foreach ($paste as $tipo => $pasta)
                <h1 class="titolo-tipo">{{ $tipo }}</h1>
                <div class="card-container">
                    @foreach ($pasta as $indice => $formato)
                        <div class="card">
                            <img src="{{ $paste['src'] }}" alt="{{ $paste['titolo'] }}">
                            <div class="overlay">
                                <a href="{{ route('pagina-dettaglio', ['id' => $indice]) }}">
                                    {{ $paste['titolo'] }}
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection


@section('page-title', 'Tutti i prodotti - La Molisana')
