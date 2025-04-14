@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-secondary my-4">
        {{ __('Benvenuto') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Ciao {{Auth::user()->name}}
                    </h4>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Pannello di controllo attivato! Tutti i comandi sono a portata di clic. Gestisci, modifica e pubblica contenuti come un vero admin ninja. Lets build something great! 💻') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
