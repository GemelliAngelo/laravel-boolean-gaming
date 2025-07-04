@extends('layouts.app')
@section('title',$game->title)

@section('content')
    
    <div class="d-flex flex-column flex-lg-row justify-content-center gap-2">
        <img class="img-fluid w-75 rounded" src="{{asset('storage/'. $game->cover_url)}}" alt="cover {{$game->title}}">
        <div class="d-flex flex-column justify-content-between align-items-center text-bg-dark w-25 py-3 gap-2 rounded">
            <h5 class="text-center">{{$game->publisher}} / {{$game->developer}}</h5>
            @if ($game->genre)
            <span>{{$game->genre->name}}</span>
            @endif
            <div class="text-center">
              @foreach ($game->platforms as $platform)
              <span class="badge rounded-pill" style="background-color: {{$platform->color}}">{{$platform->name}}</span>
              @endforeach
            </div>
            <span class="fs-5"><i class="fa-solid fa-star me-2"></i>{{$game->rating}}</span>
            <p class="text-center mx-4">{{$game->description}}</p>
            @if ($game->price == 0)
                            <span class="card-subtitle badge text-bg-success fs-6 my-3">GRATIS</span>
                            @else
                            <span class="card-subtitle badge text-bg-light fs-6 my-3">&#8364 {{$game->price}}</span>
                            @endif
            <small>{{date("m/Y",strtotime($game->release_date))}}</small>
            <div>
                <a class="btn btn-warning me-2" href="{{route("games.edit", $game)}}"><i class="fa-solid fa-pen"></i></a>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="py-3">
      <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="{{route('games.index')}}">&#8676 Torna a tutti i giochi</a>
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
    
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </div>
          </div>
        </div>
    </div>


@endsection