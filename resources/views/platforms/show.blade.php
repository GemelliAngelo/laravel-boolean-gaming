@extends('layouts.app')
@section('title',$platform->name)

@section('content')
    <div id="platform-container" class="rounded" style="background-color: {{$platform->color}}">
        <span class="platform-title">
            @if (str_contains($platform->name,'Nintendo'))
            <i class="fa-solid fa-gamepad"></i>
            @elseif($platform->name == 'PC')
            <i class="fa-solid fa-desktop"></i>
            @elseif($platform->name == 'Mobile')
            <i class="fa-solid fa-mobile"></i>
            @else
            <i class="fa-brands fa-{{strtolower($platform->name)}}"></i>
            @endif
        </span>
    </div>
    
    <div class="d-flex justify-content-evenly align-items-center gap-3 text-bg-dark my-3 p-3 rounded">
        <button class="btn btn-warning w-50"><i class="fa-solid fa-pen"></i></button>
        <button type="button" class="btn btn-danger w-50" data-bs-toggle="modal" data-bs-target="#deleteModalPlatform"><i class="fa-solid fa-trash"></i></button>
    </div>

    <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="{{route('platforms.index')}}">&#8676 Torna a tutti i giochi</a>



    <div id="deleteModalPlatform" class="modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Conferma Eliminazione</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Sei sicuro di voler eliminare la piattaforma?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{route("platforms.destroy",$platform)}}" method="POST">
                    @csrf
                    @method("DELETE")
    
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </div>
          </div>
        </div>
    </div>
@endsection