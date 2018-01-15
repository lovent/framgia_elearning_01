@extends('layouts.app')

@section('content')

<div class="container">
    <section id="content">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <h1>Login Form</h1>
            <div class="form-group{{$errors->has('email') ? 'has-error' : ''}}">
                <input type="text" placeholder="Email Address" required="" name="email" id="email" value="{{ old('email') }}"/>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{$errors->has('password') ? 'has-error' : ''}}">
                <input type="password" placeholder="Password" required="" id="password" name="password" value="{{old('password')}}"/>
                @if ($errors->has('password')) 
                    <span class="help-block">
                        <strong>{{ $errors->first('password')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <input type="submit" value="Log in" />
                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                </a>
            </div>
        </form>
    </section>
</div>

@endsection
