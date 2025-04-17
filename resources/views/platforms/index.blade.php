@extends('layouts.app')
@section('title','Tutte le Piattaforme')

@section('content')
    <div class="row gy-5">
        <div class="col-12">
            <a class="link-underline link-underline-opacity-0" href="{{route('platforms.create')}}">
                <div class="card h-100">
                    <div class="card-body text-bg-dark text-center">
                        <h5 class="card-title">Aggiungi Piattaforma</h5>
                    </div>
                </div>
            </a>
        </div>
        @foreach ($platforms as $platform)
        <div class="col">
            <div class="card card-platform">
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
        </div>
        @endforeach
    </div>
@endsection