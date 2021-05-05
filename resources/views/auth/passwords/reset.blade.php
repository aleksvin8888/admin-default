@extends('auth.layouts.app')

@section('contentauth')
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Изменение Пароля</h3></div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf

                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="form-group">
                                            <label for="email" class="small mb-1">{{ __('E-Mail Address') }}</label>
                                            <input id="email" type="email" class="form-control py-4 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus readonly>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="small mb-1">{{ __('Password') }}</label>


                                            <input id="password" type="password" class="form-control py-4 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm" class="small mb-1">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control py-4" name="password_confirmation" required autocomplete="new-password">
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Изменить Пароль') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
