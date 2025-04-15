@extends('layouts.app')
@section('title',$game->title)

@section('content')
    <div class="jumbo">
        <img src="{{$game->cover_url}}" alt="cover {{$game->title}}">
    </div>
    <hr>
    <div class="d-flex my-3 justify-content-between align-items-center">
        <h5 class="m-0">Publisher: {{$game->publisher}}</h5>
        <span>Rilasciato: {{date("d/m/Y",strtotime($game->release_date))}}</span>
    </div>
    <div class="d-flex my-3 justify-content-between align-items-center">
        <p class="fs-5 m-0">{{$game->description}}</p>
        <span><i class="fa-solid fa-star me-2"></i>{{$game->rating}}</span>
    </div>
    <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="{{route('games.index')}}">&#8676 Torna a tutti i giochi</a>
@endsection