@extends('layouts.app')
@section('title','Compila il form qui sotto')

@section('content')
    <form action="{{route("games.store")}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-control bg-dark-subtle mb-3">
                    <label class="form-label" for="title">Nome gioco</label>
                    <input class="form-control" type="text" name="title" id="title" required>
                </div>
            </div>
            <div class="col-3">
                <div class="form-control bg-dark-subtle mb-3">
                    <label for="genre_id" class="form-label">Genere</label>
                    <select name="genre_id" id="genre_id" class="form-select">
                        <option selected>Nessun Genere</option>
                        @foreach ($genres as $genre)
                            <option value="{{$genre->id}}">{{$genre->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="form-control bg-dark-subtle mb-3">
                    <label for="cover_url" class="form-label">Copertina</label>
                    <input type="file" name="cover_url" id="cover_url" class="form-control">
                </div>
            </div>
            <div class="col-12">
                <div class="form-control bg-dark-subtle mb-3 d-flex justify-content-around">
                    @foreach ($platforms as $platform)
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="platforms[]" value="{{$platform->id}}" id="tag-{{$platform->id}}">
                        <label for="tag-{{$platform->id}}">{{$platform->name}}</label>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12">
                <div class="form-control bg-dark-subtle mb-3">
                    <label class="form-label" for="description">Descrizione</label>
                    <textarea class="form-control" name="description" id="title" required></textarea>
                </div>
            </div>
            <div class="col-6">
                <div class="form-control bg-dark-subtle mb-3">
                    <label class="form-label" for="publisher">Publisher</label>
                    <input class="form-control" type="text" name="publisher" id="publisher" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-control bg-dark-subtle mb-3">
                    <label class="form-label" for="developer">Developer</label>
                    <input class="form-control" type="text" name="developer" id="developer" required>
                </div>
            </div>
            <div class="col-4">
                <div class="form-control bg-dark-subtle mb-3">
                <label class="form-label" for="release_date">Rilasciato</label>
                    <input class="form-control" type="date" name="release_date" id="release_date" required>
                </div>
            </div>
            <div class="col-4">
                <div class="form-control bg-dark-subtle mb-3">
                    <label class="form-label" for="price">Prezzo</label>
                    <input class="form-control" type="number" min="0" max="99999999.99" step="0.01" name="price" id="price" required>
                </div>
            </div>
            <div class="col-4">
                <div class="form-control bg-dark-subtle mb-3">
                    <label class="form-label" for="rating">Recensione</label>
                    <input class="form-control" type="number" min="1" max="10" step="0.1" name="rating" id="rating" required>
                </div>
            </div>
            <div class="col-6 text-end">
                <a href="{{route("games.index")}}" class="btn btn-outline-dark w-100">ANNULLA</a>
            </div>
            <div class="col-6">
                <input type="submit" value="SALVA" class="btn btn-outline-primary w-100">
            </div>
        </div>
    </form>
@endsection