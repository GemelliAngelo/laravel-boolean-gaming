@extends('layouts.app')
@section('title','Accedi')
@section('content')
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-control bg-dark-subtle mb-3">
                                    <label for="email" class="form-label">{{ __('Indirizzo Email') }}</label>
                                    
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-control bg-dark-subtle mb-3">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                       
                        
                        <div class="mb-3">
                            <div class="form-check form-check-reverse form-control form-switch bg-dark-subtle mb-3 px-5">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                
                                <label class="form-check-label" for="remember">
                                    {{ __('Ricordami') }}
                                </label>
                            </div>
                            <div class="d-flex gap-2 mb-3">
                                <a href="/register" class="btn btn-outline-dark w-50">
                                    {{ __('Registrati') }}
                                </a>
                                <button type="submit" class="btn btn-primary w-50">
                                    {{ __('Accedi') }}
                                </button>
                            </div>
                            <div class="text-center mb-3">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Password dimenticata?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
