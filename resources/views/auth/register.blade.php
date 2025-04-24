@extends('layouts.app')
@section('title', 'Registrati')
@section('content')
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <div class="row">
                <div class="col-6">

                    <div class="form-control bg-dark-subtle mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
                        
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-6">

                    <div class="form-control bg-dark-subtle mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo Email') }}</label>
                        
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-6">

                    <div class="form-control bg-dark-subtle mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-control bg-dark-subtle mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Conferma Password') }}</label>
                        
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>    
                <div class="col-12">
                    <div class="d-flex gap-2">
                        <a href="/login" class="btn btn-outline-dark w-50">
                            {{ __('Accedi') }}
                        </a>
                        <button type="submit" class="btn btn-primary w-50">
                            {{ __('Registrati') }}
                        </button>
                    </div>
                </div>
            </div>    
        </form>
    </div>
</div>
@endsection
