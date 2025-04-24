@extends('layouts.app')
@section('title','Tutti i Generi')
@section('content')
    <div class="row g-3">
        <div class="col-12">
            <div class="card text-center mb-4 zoom">
                <a class="text-bg-dark w-100 link-underline link-underline-opacity-0 py-2" href="" data-bs-toggle="modal" data-bs-target="#createModalGenre">
                    <h5 class="my-2">Aggiungi Genere</h5>
                </a>
            </div>
        </div>
        @foreach ($genres as $genre)
        <div class="col-md-6 col-xxl-3">
            <div class="card h-100 text-bg-dark">
                <div class="card-body text-center">
                        <h3>{{$genre->name}}</h3>
                        <div class="d-flex justify-content-center gap-2">
                            <button class="btn btn-warning w-50" data-bs-toggle="modal" data-bs-target="#editModalGenre-{{$genre->id}}">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                            <button class="btn btn-danger w-50" data-bs-toggle="modal" data-bs-target="#deleteModalGenre-{{$genre->id}}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </div>
                </div>
            </div>
        </div>
        
        <div id="editModalGenre-{{$genre->id}}" class="modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modifica Genere</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route("genres.update",$genre)}}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="modal-body">
                            <div class="form-control bg-dark-subtle my-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{$genre->name}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                            <button type="submit" class="btn btn-success">Salva</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div id="deleteModalGenre-{{$genre->id}}" class="modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Conferma Eliminazione</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Sei sicuro di voler eliminare il genere?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <form action="{{route("genres.destroy",$genre)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>



    <div id="createModalGenre" class="modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Aggiungi un Genere</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route("genres.store")}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-control bg-dark-subtle my-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annulla</button>
                    <button type="submit" class="btn btn-primary">Salva</button>
                </div>
            </form>
          </div>
        </div>
    </div>
@endsection