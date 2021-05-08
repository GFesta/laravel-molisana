@extends('layouts.app')

@section('page-title', 'Tutti i prodotti - La Molisana')

@section('content')
    <div class="prodotti">
        <div class="container">
            @foreach ($formati as $tipo => $pasta)
                <h1 class="titolo-tipo text">{{ $tipo }}</h1>
                <div class="card-container">
                    @foreach ($pasta as $indice => $formato)
                        <div class="card">
                            <img src="{{ $formato['src'] }}" alt="{{ $formato['titolo'] }}">
                            <div class="overlay">
                                <a href="{{ route('pagina-dettaglio', ['id' => $indice]) }}">
                                    {{ $formato['titolo'] }}
                                </a><i class="fas fa-utensils"></i>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection

