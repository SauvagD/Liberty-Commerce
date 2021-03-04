@extends('layouts.app')

@section('content')
<link href="{{ asset('../css/login.css') }}" rel="stylesheet">
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <form method="POST" action="{{ route('login') }}">
               <div id="login_box">
               <div class="left">
                 <h1 class= "sign">Login</h1>
                 <div class= "email"><input type="email" name="email" placeholder="{{ __('E-Mail Address') }}" /> </div>
                 <div class="col-md-6">
                  @csrf
                   @error('email')
                   <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                   </span>
                   @enderror
                 </div>
                 <div class= "password"><input type="password" name="password" placeholder="{{ __('Password') }}" /> </div>
                 <div class="col-md-6">

                   @error('password')
                   <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                   </span>
                   @enderror
                 </div>
                 <div class="form-check">
                 <input type="submit" class="submit" name="signup_submit" value="LOGIN" />
               </div>
              </form>
                            <
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
