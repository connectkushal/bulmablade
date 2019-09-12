@extends('layouts.app')

@section('content')

<div class="container">
    <div class="columns">
        <div class="column is-8 is-offset-2 ">
            <div class="box">
                <p class="title">{{ __('Verify Your Email Address') }}</p>
                <hr>
                @if (session('resent'))
                    <div class="notification is-success">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                <p class="content">
                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},

                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button class="button is-info">{{ __('click here to request another') }}</button>
                </form>
                </p>

            </div>
        </div>
    </div>

</div>

@endsection
