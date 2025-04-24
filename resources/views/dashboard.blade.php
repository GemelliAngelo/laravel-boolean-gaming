@extends('layouts.app')
@section('title','Benvenuto')
@section('content')
    <div class="row gy-5 justify-content-center">
        <div class="col-12">
            <div class="card bg-dark-subtle">               
                <div class="card-body text-center">
                    <h2>
                        Ciao {{Auth::user()->name}}
                    </h2>
                    <hr>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Pannello di controllo attivato! Tutti i comandi sono a portata di clic. Gestisci, modifica e pubblica contenuti come un vero admin ninja. Lets build something great! 💻') }}
                </div>
            </div>
        </div>
        <div class="col-12 text-center">
            <a href="{{route('games.index')}}" class="btn btn-outline-dark py-4 w-100"><h5>Visualizza Tutti i Giochi</h5></a>
        </div>
        <div class="col-12 text-center">
            <a href="{{route('platforms.index')}}" class="btn btn-outline-dark py-4 w-100"><h5>Visualizza Tutte le Piattaforme</h5></a>
        </div>
        <div class="col-12 text-center">
            <a href="{{route('genres.index')}}" class="btn btn-outline-dark py-4 w-100"><h5>Visualizza Tutti i Generi</h5></a>
        </div>
    </div>
@endsection
