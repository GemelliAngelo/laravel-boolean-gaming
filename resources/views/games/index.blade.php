@extends('layouts.app')
@section('title','Tutti i Giochi')
@section('content')
    @foreach ($games as $game)
        <ul>
            <li>{{$game->title}}</li>
            <li>{{$game->description}}</li>
            <li>€{{$game->price}}</li>
        </ul>
    @endforeach
@endsection