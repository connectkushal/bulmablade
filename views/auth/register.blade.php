@extends('app')

@section('main')
@include('partials.navbar')

<section class="section">
<div class="container">
<div class="box">
<form method="POST" action="{{ route('register') }}">
{{ csrf_field() }}		
    <h1 class="title is-4">Register</h1>

        <div class="field ">
            <label class="label"> Username</label>
            <div class="control has-icons-left">
                <input 
                    class="input" 
                    type="text" 
                    placeholder="Create a username" 
                    name="name" value="{{ old('name') }}" 
                    required autofocus
                >
                <span class="icon is-small is-left">
                    <i class="fa fa-user"></i>
                </span>
            </div>
             @if ($errors->has('name'))
                <p class="help is-danger is-size-6">
                    {{ $errors->first('name') }}
                </p>
             @endif
        </div>

        <div class="field ">
            <label class="label"> Email</label>
            <div class="control has-icons-left">
                <input 
                    class="input" 
                    type="email" 
                    placeholder="Enter your email id" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required autofocus
                >
                <span class="icon is-small is-left">
                    <i class="fa fa-envelope"></i>
                </span>
            </div>
             @if ($errors->has('email'))
                <p class="help is-danger is-size-6 ">
                    {{ $errors->first('email') }}
                </p>
             @endif
        </div>

        <div class="field ">
            <label class="label">Password</label>
            <div class="control has-icons-left">
                <input 
                    class="input" 
                    type="password" 
                    placeholder="Password" 
                    name="password" 
                    required  
                >
                <span class="icon is-small is-left">
                    <i class="fa fa-lock"></i>
                </span>
            </div>
             @if ($errors->has('password'))
                <p class="help is-danger is-size-6">
                    {{ $errors->first('password') }}
                </p>
             @endif
        </div>

        <div class="field ">
            <label class="label">Confirm Password</label>
            <div class="control has-icons-left">
                <input 
                    class="input" 
                    type="password" 
                    placeholder="Retype Password" 
                    name="password_confirmation" 
                    required 
                >
                <span class="icon is-small is-left">
                    <i class="fa fa-lock"></i>
                </span>
            </div>
        </div>

        <div class="field">
            <p class="control">
                <button class="button is-info">
                    Sign Up
                </button>
            </p>
        </div>
</form>
</div>
</div>
</section>
@endsection
