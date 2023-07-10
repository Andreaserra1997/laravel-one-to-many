@extends('admin.layouts.base')

@section('contents')

    <h1>Add new Project</h1>

    <form method="POST" action="{{ route('admin.projects.store') }}" novalidate>
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome del progetto</label>
            <input
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                id="name"
                name="name"
                value="{{ old('name') }}"
            >
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="client_name" class="form-label">Nome del cliente</label>
            <input
                type="text"
                class="form-control @error('client_name') is-invalid @enderror"
                id="client_name"
                name="client_name"
                value="{{ old('client_name') }}"
            >
            @error('client_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Data</label>
            <input
                type="text"
                class="form-control @error('date') is-invalid @enderror"
                id="date"
                name="date"
                value="{{ old('date') }}"
            >
            @error('date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="cover_image" class="form-label">Url immagine</label>
            <input
                type="url"
                class="form-control @error('cover_image') is-invalid @enderror"
                id="cover_image"
                name="cover_image"
                value="{{ old('cover_image') }}"
            >
            @error('cover_image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="summary" class="form-label">Descrizione</label>
            <textarea
                class="form-control @error('summary') is-invalid @enderror"
                id="summary"
                rows="10"
                name="summary">{{ old('summary') }}</textarea>
            @error('summary')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button class="btn btn-primary">Salva</button>
    </form>

@endsection