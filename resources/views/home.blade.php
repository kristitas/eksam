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
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Olete sisse logitud!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
