@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>NEWS</h1>
        @foreach ($ as $)
            <p>{{ $ }}</p>
        @endforeach
    </div>
@endsection

@section('page-title', 'Latest news - La Molisana')