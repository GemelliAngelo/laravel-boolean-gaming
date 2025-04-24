@extends('layouts.app')
@section('title','Tutti i Generi')
@section('content')
    <div class="row g-3">
        @foreach ($genres as $genre)
        <div class="col-md-6 col-xxl-3">
            <div class="card h-100 text-bg-dark">
                <div class="card-body text-center">
                        <h3>{{$genre->name}}</h3>
                        <div class="d-flex justify-content-center gap-2">
                            <button class="btn btn-warning w-50">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                            <button class="btn btn-danger w-50">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection