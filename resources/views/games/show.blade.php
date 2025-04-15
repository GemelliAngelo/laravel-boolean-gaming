@extends('layouts.app')
@section('title',$game->title)

@section('content')
    
    <div class="d-flex flex-column flex-lg-row justify-content-center gap-2 my-5">
        <img class="img-fluid w-75 rounded" src="{{asset('storage/'. $game->cover_url)}}" alt="cover {{$game->title}}">
        <div class="d-flex flex-column justify-content-between align-items-center text-bg-dark w-25 py-3 gap-2 rounded">
            <h5 class="text-center">{{$game->publisher}} / {{$game->developer}}</h5>
            <span class="fs-5"><i class="fa-solid fa-star me-2"></i>{{$game->rating}}</span>
            <p class="text-center mx-4">{{$game->description}}</p>
            <span class="badge fs-4 text-bg-info">&#8364 {{$game->price}}</span>
            <small>{{date("m/Y",strtotime($game->release_date))}}</small>
            <div class="div">
                <a class="btn btn-warning me-2" href="{{route("games.edit", $game)}}"><i class="fa-solid fa-pen"></i></a>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </div>
        </div>
    </div>
        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="{{route('games.index')}}">&#8676 Torna a tutti i giochi</a>


    <div id="deleteModal" class="modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Conferma Eliminazione</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Sei sicuro di voler eliminare il gioco?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{route("games.destroy",$game)}}" method="POST">
                    @csrf
                    @method("DELETE")
    
                    <input type="submit" value="Elimina" class="btn btn-danger">
                </form>
            </div>
          </div>
        </div>
    </div>


@endsection