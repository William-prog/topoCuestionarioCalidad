@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sesion Iniciada') }}</div>

                <div class="card-body">
                    {{ __('Bienvenido ') }} {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection