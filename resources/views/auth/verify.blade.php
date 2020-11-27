@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.guest')

    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>{{ __('Verifica tu Dirección de Correo Electrónico') }}</small>
                        </div>
                        <div>
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('Un link de verificación ha sido enviado a tu dirección de correo electrónico.') }}
                                </div>
                            @endif
                            
                            {{ __('Antes de continuar, por favor busca el link de verificación en tu correo electrónico.') }}
                            
                            @if (Route::has('verification.resend'))
                                {{ __('Si no recibiste el correo') }}, <a href="{{ route('verification.resend') }}">{{ __('clickea aquí para solicitar otro') }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
