@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="top-bar d-flex justify-content-between align-items-center">
            <h1 class="display-1 fw-bold text-uppercase text-center mb-5">Il mio portfolio</h1>
            {{-- <a href="{{ route('admin.types.create') }}"class="btn btn-danger">Aggiungi un progetto</a> --}}

        </div>
        <div class="row justify-content-center row-gap-5 mb-5" style="gap:20px">

            @foreach ($types as $type)
                <div class="card" style=" width: calc(100% / 4 - 20px); min-height: 500px">
                    {{-- <img src="{{ $type->thumb }}" class="card-img-top" alt="..."
                        style="object-fit:cover; height: 254px;"> --}}
                    <div class="card-body  d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{ $type->type }}</h5>
                        {{-- <p class="card-text">{{ $type->description }}</p>
                        <span>{{ $type->code }}</span>
                        <span>{{ $type->link }}</span>

                        <a href="{{ route('admin.types.show', $type->id) }}" class="btn btn-primary">Visualizza</a> --}}
                    </div>
                </div>
            @endforeach

        </div>
        {{-- <div id="button" class="d-flex justify-content-center">

        </div> --}}
    </div>
@endsection

{{-- @extends('layouts.app')

@section('content')
    <div class="container py-5">

        <h1>Tutti i post</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Contenuto</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $type->name }}</td>
                        <td>{{ $type->description }}</td>
                        <td><a href="{{ route('admin.types.edit', $type->id) }}" class="btn btn-warning">Modifica</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection --}}
