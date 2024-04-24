

@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <h1>Aggiungi un progetto</h1>

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name">Titolo</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                    placeholder="Titolo" aria-describedby="titleHelper" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <small id="titleHelper" class="text-muted">Titolo del post, massimo 255 caratteri</small>
            </div>

            <div class="mb-4">
                <label for="description">Descrizione</label>
                <textarea class="form-control  @error('description') is-invalid @enderror" name="description" id="description"
                    rows="4">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="code">Linguaggio</label>
                <input class="form-control  @error('code') is-invalid @enderror" name="code" id="code"
                    rows="4" value="{{ old('code') }}">
                @error('code')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="link">Link</label>
                <input class="form-control  @error('link') is-invalid @enderror" name="link" id="link"
                    rows="4" value="{{ old('link') }}">
                @error('link')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="thumb">thumb</label>
                <input class="form-control  @error('thumb') is-invalid @enderror" name="thumb" id="thumb"
                    rows="4" value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="btn btn-primary">Aggiungi</button>

        </form>

    </div>
@endsection
