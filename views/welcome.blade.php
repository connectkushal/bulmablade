@extends('layouts.app')

@section('content')

    <div class="hero is-medium is-white">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">
                    {{config('app.name', 'Website')}}
                </h1>
                <h2 class="subtitle">
                    A short description about the website
                </h2>
            </div>
        </div>
  </div>
    
@endsection
