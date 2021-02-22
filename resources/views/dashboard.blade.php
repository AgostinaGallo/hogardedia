@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
        <div class="container">
            <h1 class="display-1">Listado de Admitidos</h1>
            <div class="header-body">                
                <!-- Tabla  --> 
                <div class="table-responsive">
                    <table class="table align-items-center table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre </th>
                                <th scope="col">Radicación</th>
                                <th scope="col">Asistencia </th>
                                <th scope="col">Número de Expediente</th>
                                <th scope="col">Estado de Salud</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                    </table>    
                </div>
            </div>
        </div>          
    @include('layouts.footers.auth')
    
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush