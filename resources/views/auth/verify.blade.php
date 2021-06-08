@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Uuendage salasõna') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kinnita oma e-maili aadress') }}</div>

                <div class="card-body">
                    @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-success" role="alert">
                            {{ __('Uus kinnituslink on saadetud teie e-mailile') }}
                        </div>
                    @endif

                    {{ __('Enne edasi liikumist kontrollige teie e-mailile saadetud kinnitust') }}
                    {{ __('Kui te ei saanud e-maili') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('vajutage siia uue registreerimiseks') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
