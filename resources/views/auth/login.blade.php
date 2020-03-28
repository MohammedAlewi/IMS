@extends('layouts.app')
@section("content")
    <div class="row justify-content-center">
        <div class="col-md-4 col-xs-12">
            <div class="card ">
                <div class="card-header card-title">Login</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="email" class="bmd-label-floating">Email address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="bmd-help">We'll never share your email with anyone else.</span>
                            </div>
                            <div class="form-group col-12">
                                <label for="password" class="bmd-label-floating">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                id="password" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remeber Me
                                </label>
                            </div> 
                        </div>

                        <div class="form-group">
                            @if (Route::has('password.request'))
                                <a class="btn btn-danger" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif

                            <button type="submit" class="btn btn-primary float-right">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection