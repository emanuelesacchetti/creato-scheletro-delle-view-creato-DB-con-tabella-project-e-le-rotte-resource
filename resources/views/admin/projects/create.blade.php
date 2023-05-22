@extends('layouts.back')

@section('content')
    <h3>Crea un nuovo progetto</h3>
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title">
            @error('title')
                <div class='invalid-feedback'>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cover_img" class="form-label">URL dell'immagine di copertina</label>
            <input type="text" class="form-control @error('cover_img') is-invalid @enderror" id="cover_img">
            @error('title')
                <div class='invalid-feedback'>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Data di creazione</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date">
            @error('title')
                <div class='invalid-feedback'>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Descizione</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" rows="3"></textarea>
            @error('title')
                <div class='invalid-feedback'>{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Crea nuovo progetto</button>
    </form>

@endsection