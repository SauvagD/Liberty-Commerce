@extends('layouts.app')

@section('content')
<link href="{{ asset('../css/register.css') }}" rel="stylesheet">
<div class="container">
                <h1 class= "sign">Sign up</h1>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class= "username"> <input type="text" name="name" placeholder="{{ __('Name') }}" /> </div>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <div class= "email"><input type="text" name="email" placeholder="{{ __('E-Mail Address') }}" /> </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <div class= "password"><input type="password" name="password" placeholder="{{ __('Password') }}" /></div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <div class= "password2"> <input type="password" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" /></div>

<input type="submit" name="signup_submit" class="submit" value="{{ __('Register') }}" />
</form>
</div>


@endsection
