@extends('layouts.app')

@section('page-title', $formato['titolo'] . ' - La Molisana')

@section('content')
    <div class="container">
        <h1 class="titolo-prodotto">{{ $formato['titolo'] }}</h1>
    </div>
    <div class="header-prodotto">
        <img src="{{ $formato['src-h'] }}" alt="{{ $formato['titolo'] }}">
    </div>
    <div class="pacco-pasta">
        <img src="{{ $formato['src-p'] }}" alt="{{ 'confezione ' . $formato['titolo'] }}">
    </div>
    <div class="descrizione">
        <div class="container">
            <p>{!! $formato['descrizione'] !!}</p>
            <div class="info">
                <div class="info-box">
                    <i class="fas fa-2x fa-info"></i>
                    <p>{{ $formato['tipo'] }}</p>
                </div>
                <div class="info-box">
                    <i class="far fa-2x fa-clock"></i>
                    <p>{{ $formato['cottura'] }}</p>
                </div>
                <div class="info-box">
                    <i class="fas fa-2x fa-weight-hanging"></i>
                    <p>{{ $formato['peso'] }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

