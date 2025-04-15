@extends('layouts.app')
@section('title','Tutti i Giochi')
@section('content')
<div class="row row-cols-4 g-5">
    @foreach ($games as $game)
        <div class="col">
            <a class="link-underline link-underline-opacity-0" href="#">
                <div class="card h-100">
                    <img src="{{$game->cover_url}}" alt="cover {{$game->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$game->title}}</h5>
                        <small>{{$game->publisher}}</small>
                        <h5>€ {{$game->price}}</h5>
                        <span>{{$game->rating}}</span>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
@endsection