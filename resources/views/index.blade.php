@extends('layouts.app')
@section("title","Benvenuto nel pannello di amministrazione")

@section('content')
<div class="card text-center">
    <div class="card-header">
      Pannello di Accesso
    </div>
    <div class="card-body">
        <h5 class="card-title">ACCEDI PER CONTINUARE</h5>
        <p class="card-text">Una volta effettuato l'accesso puoi gestire tutti i contenuti della tua area di riferimento</p>
        <div class="d-flex justify-content-center gap-3">
          <a href="{{ route('login') }}" class="btn btn-outline-primary">ACCEDI</a>
          <a href="{{ route('register') }}" class="btn btn-secondary">REGISTRATI</a>
        </div>
    </div>
</div>
@endsection