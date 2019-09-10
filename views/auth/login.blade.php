@extends('app')

@section('main')
@include('partials.navbar')

<section class="section">
<div class="container">
<div class="box">
    
<h1 class="title is-4">Login</h1>

<form method="POST" action="{{ route('login') }}">
{{ csrf_field() }}		
        <div class="field">			
            <label class="label">Email</label>
            <div class="control has-icons-left">
                <input 
                    class="input" 
                    type="email" 
                    placeholder="Email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required autofocus
                >
                <span class="icon is-small is-left">
                    <i class="fa fa-user"></i>
                </span>
            </div>
             @if ($errors->has('email'))
                <p class="help is-danger is-size-6">
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
                    name="password" 
                    placeholder="Password" 
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
        
        <div class="field">
            <p class="control">
                <button class="button is-danger" style="border-radius: 25px;">
                   <strong>Submit</strong> 
                </button>
            </p>
	</div>
</form>
</div>
</div>
</section>
@endsection
