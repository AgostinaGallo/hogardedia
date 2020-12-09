@extends('layouts.app')

@section('content')
 
<!-- Header -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card header -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                        <i class="fas fa-address-card"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <span class="h1 font-weight-bold mb-0">Admisiones</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
               <div class="col-lg-12 col-12">
              <a href="{{ route('participantes.create') }}" class="btn btn-md btn-success float-right">Agregar Admisión</a>
            </div>
            <!-- Tabla -->
            <div class="table-responsive-lg">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="codigo">Codigo</th>
                    <th scope="col" class="sort" data-sort="dni">D.N.I.</th>
                    <th scope="col" class="sort" data-sort="apellido">Apellido</th>
                    <th scope="col" class="sort" data-sort="nombre">Nombre</th>
                    <th scope="col" class="sort" data-sort="fecha_admision">Fecha de Admision</th>
                    <th scope="col">ACCIÓN</th>
                  </tr>
                </thead>
                <tbody class="list">
                @foreach($participantes as $par)
                  <tr>
                    <th scope="row">                    
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{ $par->codigo }}</span>
                        </div>                 
                    </th>
                    <td>{{ $par->dni }}</td>
                    <td>{{ $par->apellido }}</td>
                    <td>{{ $par->nombre }}</td>
                    <td>
                      <div class="d-flex align-items-center">
                      {{ $par->fecha_admision }}
                      </div>
                    </td>
                    <td>
                      <form action="{{ route('participantes.destroy',$par->id) }}" method="POST" id="miFormulario">
                        <a href="{{ route('participantes.show', $par->id) }}" title="show">
                            <i class="fas fa-eye text-dark fa-lg"></i>
                        </a>
                        <a href="{{ route('participantes.edit', $par->id) }}">
                            <i class="fas fa-edit fa-lg"></i>
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Borrar" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                      </form>
                    </td>
                  </tr>                  
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>          
        
    </div>

  <!-- Mensaje de exito, segun accion elegida -->
@if ($message = Session::get('success'))
    <div class="alert alert-default alert-dismissible fade show" role="alert">
      <span class="alert-inner--icon"><i class="ni ni-check-bold"></i></span>
      <span class="alert-inner--text">{{ $message }}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>  
    </div>
        
@endif 

{!! $participantes->links() !!}

@include('layouts.footers.auth')

@endsection

