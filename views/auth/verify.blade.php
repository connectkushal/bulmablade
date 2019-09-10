@extends('app')

@section('main')

<section class="section">
<div class="container">
    <h1 class="title is-4">{{ __('Verify Your Email Address') }}</h1>
        <div class="box">
            @if (session('resent'))
                <div class="has-text-danger">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }},

            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <div class="container">
                    <a class="button">{{ __('click here to request another') }}</a>
                </div>
            </form>
        </div>
</div>
</section>
@endsection
