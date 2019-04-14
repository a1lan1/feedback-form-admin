@extends('layouts.app')

@section('content')
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">{{ __('Register') }}</h1>
                        </div>

                        <form method="POST" action="{{ route('register') }}" class="user">
                            @csrf

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} form-control-user" id="name" placeholder="{{ __('Name') }}"  name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-sm-6">
                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-user" id="email" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-user" id="password" placeholder="{{ __('Password') }}" name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password-confirm" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                {{ __('Register') }}
                            </button>
                        </form>

                        <hr>

                        <div class="text-center">
                            <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
