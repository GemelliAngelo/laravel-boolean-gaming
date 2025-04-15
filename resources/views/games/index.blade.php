@extends('layouts.app')
@section('title','Tutti i Giochi')
@section('content')
<div class="row row-cols-4 g-5">
    <div class="col">
        <a class="link-underline link-underline-opacity-0" href="{{route('games.create')}}">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title text-center">Aggiungi gioco</h5>
                </div>
                <div class="card-body d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-2xl fa-plus"></i>
                </div>
            </div>
        </a>
    </div>
    @foreach ($games as $game)
        <div class="col">
            <a class="link-underline link-underline-opacity-0" href="{{route('games.show',$game)}}">
                <div class="card h-100">
                    <img src="{{asset('storage/'. $game->cover_url)}}" alt="cover {{$game->title}}">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{$game->title}}</h5>
                        <span>{{$game->publisher}} / {{$game->developer}}</span>
                        <h5 class="card-subtitle my-3">&#8364 {{$game->price}}</h5>
                        <span><i class="fa-solid fa-star me-2"></i>{{$game->rating}}</span>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
@endsection