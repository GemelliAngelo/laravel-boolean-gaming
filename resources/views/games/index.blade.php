@extends('layouts.app')
@section('title','Tutti i Giochi')
@section('content')
<div class="row row-cols-4 gy-5">
    <div class="col">
        <a class="link-underline link-underline-opacity-0" href="{{route('games.create')}}">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title text-center">Aggiungi gioco</h5>
                </div>
                <div class="card-body text-bg-dark   d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-2xl fa-plus"></i>
                </div>
            </div>
        </a>
    </div>
    @foreach ($games as $game)
        <div class="col">
            <a class="link-underline link-underline-opacity-0" href="{{route('games.show',$game)}}">
                <div class="card h-100">
                    <img class="card-img-top" src="{{asset('storage/'. $game->cover_url)}}" alt="cover {{$game->title}}">
                    <div class="card-body text-center text-bg-dark d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{$game->title}}</h5>
                        <div class="my-2">
                            @foreach ($game->platforms as $platform)
                            <span class="badge rounded-pill" style="background-color: {{$platform->color}}">{{$platform->name}}</span>
                            @endforeach
                        </div>
                        <div>
                            <span><i class="fa-solid fa-star me-2"></i>{{$game->rating}}</span>
                            <hr>
                            <span class="card-subtitle badge text-bg-info fs-6 my-3">&#8364 {{$game->price}}</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
@endsection