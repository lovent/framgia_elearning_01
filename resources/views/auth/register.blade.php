@extends('layouts.app')

@section('content')

<div class="container">
    <section id="content">
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <h1>Register Form</h1>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <input type="text" placeholder="Name" id="name" name="name" value="{{ old('name') }}" required autofocus/>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{$errors->has('email') ? 'has-error' : ''}}">
                <input type="text" placeholder="Email" id="email" name="email" value="{{old('email')}}"/>
                @if ($errors->has('email')) 
                    <span class="help-block">
                        <strong>{{ $errors->first('email')}}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{$errors->has('password') ? 'has-error' : ''}}">
                <input type="password" placeholder="Password" id="password" name="password" value="{{old('password')}}"/>
                @if ($errors->has('password')) 
                    <span class="help-block">
                        <strong>{{ $errors->first('password')}}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <input placeholder="Confirm Password" id="password-confirm" type="password" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Register" />
            </div>
        </form>
    </section>
</div>
@endsection
