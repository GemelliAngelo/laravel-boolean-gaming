@extends('layouts.app')
@section('title',$game->title)

@section('content')
    
    <div class="d-flex justify-content-center">
        <img src="{{asset('storage/'. $game->cover_url)}}" alt="cover {{$game->title}}">
    </div>
    <div class="d-flex my-3 justify-content-between align-items-center">
        <h5 class="m-0">{{$game->publisher}} / {{$game->developer}}</h5>
        <span>Rilasciato: {{date("d/m/Y",strtotime($game->release_date))}}</span>
    </div>
    <div class="d-flex my-3 justify-content-between align-items-center">
        <p class="fs-5 m-0">{{$game->description}}</p>
        <span><i class="fa-solid fa-star me-2"></i>{{$game->rating}}</span>
    </div>
    <div class="d-flex justify-content-between align-items-center my-4">
        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="{{route('games.index')}}">&#8676 Torna a tutti i giochi</a>
        <div class="div">
            <a class="btn btn-warning me-2 border" href="{{route("games.edit", $game)}}"><i class="fa-solid fa-pen"></i></a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>
    </div>

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