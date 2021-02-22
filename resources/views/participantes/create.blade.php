@extends('layouts.app')

@section('content')

    <!-- Header -->
<div class="header bg-gradient-primary pb-4 pt-4 pt-md-7">
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
                                    <span class="h2 font-weight-bold mb-0">Admisión de Nuevo Participante</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  @if ($errors->any())
      <div class="alert alert-danger">
          <strong>Ups!</strong> Hay problemas con los datos ingresados<br><br>
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
    </div>


<!--Formulario de Admision -->
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-10">
    <div class="card-body">                                 
        <form>
          <div class="alert alert-primary" role="alert">
            <strong>Datos</strong> Personales del Admitido <br><br>
            <div class="row">  
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Número de Expediente:">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Nombre y Apellido" class="form-control">
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Numero de Documento:">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Direccion">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nacionalidad">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Código Postal" class="form-control">
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Barrio">
                </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" type="text" name="nacimientotitular" placeholder="Fecha de Nacimiento" onclick="ocultarError();" onfocus="(this.type='date')" onblur="(this.type='text')">
                    </div>                  
              </div>
              
              
              <div class="col-md-6">                
                  <div class="form-group focused">                     
                      <select id="inputState" class="form-control">                          
                        <option selected="">Masculino</option>
                        <option selected="">Femenino</option>
                        <option selected="">Otro</option>
                        <option hidden="" selected="">Género</option>
                      </select>
                  </div>
              </div>               
                
            </div>
          </div>        
        </form>
    </div>
  </div>


  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-10">
    <div class="card-body">                                 
        <form>
          <div class="alert alert-default" role="alert">
            <strong>Datos</strong> Personales del Tutor <br><br>
            <div class="row">  


              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Nombre y Apellido" class="form-control">
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Numero de Documento:">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Direccion">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nacionalidad">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Código Postal" class="form-control">
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Barrio">
                </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" type="text" name="nacimientotitular" placeholder="Fecha de Nacimiento" onclick="ocultarError();" onfocus="(this.type='date')" onblur="(this.type='text')">
                    </div>                  
              </div>
              
              <div class="col-md-6">                
                <div class="form-group focused">                     
                    <select id="inputState" class="form-control">                          
                      <option selected="">Familiar Directo</option>
                      <option selected="">Familiar Indirecto</option>
                      <option selected="">Tutor Legal</option>
                      <option hidden="" selected="">Tipo de Tutor</option>
                    </select>
                </div>
              </div>
              
              <div class="col-md-6">                
                  <div class="form-group focused">                     
                      <select id="inputState" class="form-control">                          
                        <option selected="">Masculino</option>
                        <option selected="">Femenino</option>
                        <option selected="">Otro</option>
                        <option hidden="" selected="">Género</option>
                      </select>
                  </div>
              </div>

              <div class="col-md-6">                
                <div class="form-group focused">                     
                    <select id="inputState" class="form-control">                          
                      <option selected="">Primario</option>
                      <option selected="">Secundario</option>
                      <option selected="">Terciario</option>
                      <option selected="">Universitario</option>
                      <option hidden="" selected="">Nivel de Estudio</option>
                    </select>
                </div>
              </div>
            
            <div class="col-md-6">                
              <div class="form-group focused">                     
                  <select id="inputState" class="form-control">                          
                    <option selected="">Desempleado</option>
                    <option selected="">Trabajador Autonomo</option>
                    <option selected="">Asalariado</option>
                    <option hidden="" selected="">Situacion Laboral</option>
                  </select>
              </div>
            </div>
            
            
            <div class="col-md-6">
              <div class="form-group focused">
                <select id="inputState" class="form-control">                          
                  <option selected="">Si</option>
                  <option selected="">No</option>
                  <option hidden="" selected="">Posee Discapacidad ?</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Número de Telefono">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Cantidad de Hijos">
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group focused">
                <select id="inputState" class="form-control">                          
                  <option selected="">Si</option>
                  <option selected="">No</option>
                  <option hidden="" selected="">Posee Beneficios ?</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group focused">
                <select id="inputState" class="form-control">                          
                  <option selected="">Si</option>
                  <option selected="">No</option>
                  <option hidden="" selected="">Tiene Obra Social?</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group focused">
                <select id="inputState" class="form-control">                          
                  <option selected="">Si</option>
                  <option selected="">No</option>
                  <option hidden="" selected="">Tiene Obra Social?</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                
                  <textarea class="form-control form-control-alternative" rows="3" placeholder="Observaciones sobre el Tutor"></textarea>
                
              </div>
            </div>

                            
            </div>
          </div></form>        
        
    </div>
  </div>

@include('layouts.footers.auth')


@endsection


