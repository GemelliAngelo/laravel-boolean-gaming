@extends('layouts.app')
@section('title','Tutte le Piattaforme')

@section('content')
    <div class="row row-cols-5 gy-5">
        <div class="col-12">
            <div class="card text-center zoom">
                <a class="text-bg-dark w-100 link-underline link-underline-opacity-0 py-2" href="" data-bs-toggle="modal" data-bs-target="#createModalPlatform">
                    <h5 class="my-2">Aggiungi Piattaforma</h5>
                </a>
            </div>
        </div>
        @foreach ($platforms as $platform)
        <div class="col">
            <a class="link-underline link-underline-opacity-0" href="{{route('platforms.show', $platform)}}">
                <div class="card card-platform zoom">
                    <div class="card-body" style="background-color: {{$platform->color}}">
                        <h5 class="catd-title text-center">{{$platform->name}}</h5>
                        <div class="text-center">
                            <h2>
                                @if (str_contains($platform->name,'Nintendo'))
                                <i class="fa-solid fa-gamepad"></i>
                                @elseif($platform->name == 'PC')
                                <i class="fa-solid fa-desktop"></i>
                                @elseif($platform->name == 'Mobile')
                                <i class="fa-solid fa-mobile"></i>
                                @else
                                <i class="fa-brands fa-{{strtolower($platform->name)}}"></i>
                                @endif
                            </h2>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>


    <div id="createModalPlatform" class="modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Aggiungi una Piattaforma</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route("platforms.store")}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-control bg-dark-subtle my-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-control bg-dark-subtle my-3">
                        <label for="color" class="form-label">Colore</label>
                        <input type="color" name="color" id="color" class="form-control p-0">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annulla</button>
                    <button type="submit" class="btn btn-outline-primary">Salva</button>
                </div>
            </form>
          </div>
        </div>
    </div>
@endsection