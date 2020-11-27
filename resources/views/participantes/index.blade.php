@extends('layouts.app')

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6 pt-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h1 text-white d-inline-block mb-0">Admisiones</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-md btn-neutral">Agregar Admisión</a>
            </div>
          </div>
        </div>
      </div>
       @if ($message = Session::get('success'))
        <div class="alert alert-success pt-6">
            <p>{{ $message }}</p>
        </div>
    @endif  
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Participantes Admitidos</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="codigo">Codigo</th>
                    <th scope="col" class="sort" data-sort="dni">D.N.I.</th>
                    <th scope="col" class="sort" data-sort="apellido">Apellido</th>
                    <th scope="col" class="sort" data-sort="nombre">Nombre</th>
                    <th scope="col" class="sort" data-sort="fecha_admision">Fecha de Admision</th>
                    <th scope="col"></th>
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
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="{{ route('participantes.show',$par->id) }}">Ver Detalles</a>
                          <a class="dropdown-item" href="{{ route('participantes.edit',$par->id) }}">Editar</a>
                           @csrf
                            @method('DELETE')
                          <a class="dropdown-item" href="#" onclick="document.getElementById('miFormulario').submit()">Borrar</a>
                        </div>
                      </div>
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
      @include('layouts.footers.auth')
    </div>

{!! $participantes->links() !!}




@endsection

