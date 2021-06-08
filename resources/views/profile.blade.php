@extends('layouts.app')

@section('content')
    <style>

        .card {
            background-color: #9abca7;
            color: #fff;
            padding: 3%;
        }
        .btn {
            background-color: #f5b841;
            margin-top: 10px;
        }
        .col-form-label {
            padding: 10px;
        }
    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profiili informatsioon') }}</div>

                <div class="card-body">
                    @if (session('status') == 'profile-information-updated')
                        <div class="alert alert-success" role="alert">
                            {{ __('Profiili informatsioon on salvestatud edukalt!') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ url('user/profile-information') }}">
                        @method('PUT')
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nimi') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name', 'updateProfileInformation') is-invalid @enderror" name="name" value="{{ old('name') ?? Auth::user()->name }}" required autocomplete="name" autofocus>

                                @error('name', 'updateProfileInformation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-maili aadress') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email', 'updateProfileInformation') is-invalid @enderror" name="email" value="{{ old('email') ?? Auth::user()->email }}" required autocomplete="email">

                                @error('email', 'updateProfileInformation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Salvesta') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-header">{{ __('Salasõna') }}</div>

                <div class="card-body">
                    @if (session('status') == 'password-updated')
                        <div class="alert alert-success" role="alert">
                            {{ __('Salasõna on uuendatud edukalt!') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ url('user/password') }}">
                        @method('PUT')
                        @csrf

                        <div class="form-group row">
                            <label for="current_password" class="col-md-4 col-form-label text-md-right">{{ __('Praegune salasõna') }}</label>

                            <div class="col-md-6">
                                <input id="current_password" type="password" class="form-control @error('current_password', 'updatePassword') is-invalid @enderror" name="current_password" required autofocus>

                                @error('current_password', 'updatePassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Uus salasõna') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password', 'updatePassword') is-invalid @enderror" name="password" required autofocus>

                                @error('password', 'updatePassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">{{ __('Kinnita uus salasõna') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror" name="password_confirmation" required autofocus>

                                @error('password_confirmation', 'updatePassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Salvesta') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
