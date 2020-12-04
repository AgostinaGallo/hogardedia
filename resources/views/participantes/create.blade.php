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


<!-- Page content -->
<div class="container-fluid mt--14">
  <div class="row">
    <div class="col-xl-10 mb-5 mb-xl-0">
    <div class="card shadow">
      <div class="widget-box">
        <div class="col">
           <h2 class="mb-0">Formulario de Admisión</h2>
        </div>
        <div class="widget-content nopadding">
          <form action="{{ route('participantes.store') }}" method="POST">
            @csrf
            <div class="text-center">
              <h4>Datos Personales</h4>
            </div>
            <div class="control-group">
              <label class="control-label">Expediente :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Expediente" />
              </div>
              <label class="control-label">Nombre :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese el Nombre Completo" />
              </div>
              <label class="control-label">Apellido :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese el Apellido" />
              </div>
              <label class="control-label">DNI :</label>
              <div class="controls">
                <input type="password"  class="span11" placeholder="Ingrese el Dni"  />
              </div>
              <label class="control-label">Fecha de Nacimiento :</label>
              <div class="controls">
                <div  data-date="12-02-2012" class="input-append date datepicker">
                  <input type="text" value="12-02-2012"  data-date-format="mm-dd-yyyy" class="span11" >
                  <span class="add-on"><i class="icon-th"></i></span> </div>
              </div>
              <label class="control-label">Edad :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese la Edad" />
              </div>
              <label class="control-label">Genero :</label>
              <div class="controls">
                <select multiple >
                  <option>Masculino</option>
                  <option>Femenino</option>
                  <option>Otro</option>
                </select>
              </div>
              <label class="control-label">Nacionalidad :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese la Nacionalidad" />
              </div>
              <label class="control-label">Direccion :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese la Direccion" />
              </div>
              <label class="control-label">Barrio</label>
              <div class="controls">
                <select >
                  <option>Seleccionar un Barrio</option>
                </select>
              </div>
              <label class="control-label">Localidad :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese la Localidad" />
              </div>
              <label class="control-label">Codigo Postal :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese el codigo postal" />
              </div>
            </div>

            <div class="control-group">
              <div class="text-center">
                <h4>Tutor</h4>
              </div>
              <label class="control-label">Nombre Tutor:</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese el Nombre Completo" />
              </div>
              <label class="control-label">Apellido Tutor:</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese el Apellido" />
              </div>
              <label class="control-label">DNI Tutor :</label>
              <div class="controls">
                <input type="password"  class="span11" placeholder="Ingrese el Dni"  />
              </div>
              <label class="control-label">Fecha de Nacimiento Tutor :</label>
              <div class="controls">
                <div  data-date="12-02-2012" class="input-append date datepicker">
                  <input type="text" value="12-02-2012"  data-date-format="mm-dd-yyyy" class="span11" >
                  <span class="add-on"><i class="icon-th"></i></span> </div>
              </div>
              <label class="control-label">Edad Tutor :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese la Edad" />
              </div>
              <label class="control-label">Genero Tutor :</label>
              <div class="controls">
                <select multiple >
                  <option>Masculino</option>
                  <option>Femenino</option>
                  <option>Otro</option>
                </select>
              </div>
              <label class="control-label">Nacionalidad Tutor :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese la Nacionalidad" />
              </div>
              <label class="control-label">Direccion Tutor :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese la Direccion" />
              </div>
              <label class="control-label">Tipo de Tutor :</label>
              <div class="controls">
                <select >
                  <option>Seleccionar el tipo de tutor</option>
                  <option>Padre</option>
                  <option>Madre</option>
                  <option>Hermano/a</option>
                  <option>Tutor Legal</option>
                </select>
              </div>
              <label class="control-label">Nivel de Estudios Tutor :</label>
              <div class="controls">
                <label>
                  <input type="radio" name="radio" />
                  Nivel Primario Completo</label>
                <label>
                  <input type="radio" name="radio" />
                  Nivel Secundario Completo</label>
                <label>
                  <input type="radio" name="radio" />
                  Nivel Terciario/Universitario Completo</label>
              </div>
                <label class="control-label">Situación Laboral Tutor :</label>
                <div class="controls">
                  <select >
                    <option>Seleccionar la situación laboral del tutor</option>
                    <option>Desempleado</option>
                    <option>Trabajador Autónomo</option>
                    <option>Asalariado</option>
                  </select>
                </div>
              </div>
              <label class="control-label">Discapacidad Tutor :</label>
              <div class="controls">
                <label>
                  <input type="checkbox" name="radios" />
                  Si</label>
                <label>
                  <input type="checkbox" name="radios" />
                  No</label>
              </div>
              <label class="control-label">Telefono Tutor :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese un número de contacto" />
              </div>
              <label class="control-label">Cantidad de Hijos :</label>
              <div class="controls">
                <select multiple >
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>Otro</option>
                </select>
              </div>
            <label class="control-label">Beneficios :</label>
            <div class="controls">
              <select >
                <option>Seleccionar el beneficio que posee el tutor</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
              </select>
            </div>
            <label class="control-label">Periodicidad del Beneficio :</label>
            <div class="controls">
              <input type="text" class="span11" placeholder="Ingrese la periodicidad del beneficio" />
            </div>
            <label class="control-label">Beneficios Hijos :</label>
            <div class="controls">
              <select >
                <option>Seleccionar el beneficio que poseen los hijos</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
              </select>
            </div>
            <label class="control-label">Obra Social:</label>
            <div class="controls">
              <input type="text" class="span11" placeholder="Ingrese la obra social que posee" />
            </div>
            <label class="control-label">Observaciones :</label>
            <div class="controls">
              <input type="text" class="span11" placeholder="Ingrese aquí las observaciones" />
            </div>
            <div class="control-group">
              <div class="text-center">
                <h4>Causas</h4>
              </div>
              <label class="control-label">Causa de Calle</label>
              <div class="controls">
                <input type="password"  class="span11" placeholder="Ingrese la Causa de Calle"  />
              </div>
              <label class="control-label">Actividad en la Calle :</label>
              <div class="controls">
                <select >
                  <option>Seleccionar la actividad que realiza en la calle</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <div class="text-center">
                <h4>Familia</h4>
              </div>
              <label class="control-label">Familia :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese la Composición Familiar" />
              </div>
              <label class="control-label">Estructura Familiar :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese la Estructura Familiar" />
              </div>
            </div>
            <div class="control-group">
              <div class="text-center">
                <h4>Derivaciones</h4>
              </div>
              <label class="control-label">Demanda General :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese la Demanda General" />
              </div>
              <label class="control-label">Derivado :</label>
              <div class="controls">
                <select >
                  <option>Seleccionar el area que realizo la derivación</option>
                </select>
              </div>
              <label class="control-label">Sugerencias Interdiciplinarias :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese las sugerencias Interdisciplinarias del Departamento Dirección Social" />
              </div>
            </div>
              <div class="control-group">
                <div class="text-center">
                  <h4>Situacion de Crisis</h4>
                </div>
                <label class="control-label">Situación de Crisis :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Ingrese la situación de Crisis" />
                </div>
              <label class="control-label">Redes de Sostén :</label>
              <div class="controls">
                <select >
                  <option>Seleccionar las redes de sostén</option>
                </select>
              </div>
              <label class="control-label">Discapacidad :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese la Discapacidad" />
              </div>
            <div class="control-group">
              <div class="text-center">
                <h4>Entrevista</h4>
              </div>
              <label class="control-label">Entrevista/Visita :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese datos de la entrevista/visita" />
              </div>
              <label class="control-label">Tipo de Entrevista :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ingrese el Tipo de Entrevista" />
              </div>
              <label class="control-label">Fecha Entrevista :</label>
              <div class="controls">
                <div  data-date="12-02-2012" class="input-append date datepicker">
                  <input type="text" value="12-02-2012"  data-date-format="mm-dd-yyyy" class="span11" >
                  <span class="add-on"><i class="icon-th"></i></span> </div>
              </div>
            </div>
              <div class="control-group">
                <div class="text-center">
                  <h4>Educacion</h4>
                </div>
                <label class="control-label">Estado :</label>
                <div class="controls">
                  <textarea class="span11" >Ingresar aquí el estado de a Educación</textarea>
                </div>
                <label class="control-label">Escuela :</label>
                <div class="controls">
                  <textarea class="span11" >Ingresar aquí la escuela</textarea>
                </div>
                <label class="control-label">Direccion Escuela :</label>
                <div class="controls">
                  <textarea class="span11" >Ingresar aquí la Dirección de la Escuela</textarea>
                </div>
                <label class="control-label">Nivel :</label>
                <div class="controls">
                  <label>
                    <input type="radio" name="radio" />
                    Nivel Inicial</label>
                  <label>
                    <input type="radio" name="radio" />
                    Nivel Primario</label>
                  <label>
                    <input type="radio" name="radio" />
                    Nivel Secundario</label>
                  <label>
                    <input type="radio" name="radio" />
                    Nivel Terciario/Universitario</label>
                </div>
                <label class="control-label">Turno :</label>
                <div class="controls">
                  <label>
                    <input type="checkbox" name="radios" />
                    Mañana</label>
                  <label>
                    <input type="checkbox" name="radios" />
                    Tarde</label>
                  <label>
                    <input type="checkbox" name="radios" />
                    Noche</label>
                </div>
                <label class="control-label">Repitencia :</label>
                <div class="controls">
                  <label>
                    <input type="checkbox" name="radios" />
                    Si</label>
                  <label>
                    <input type="checkbox" name="radios" />
                    No</label>
                </div>
                <label class="control-label">Act. Escolaridad :</label>
                <div class="controls">
                  <div  data-date="12-02-2012" class="input-append date datepicker">
                    <input type="text" value="12-02-2012"  data-date-format="mm-dd-yyyy" class="span11" >
                    <span class="add-on"><i class="icon-th"></i></span> </div>
                </div>
                <div class="control-group">
                  <div class="text-center">
                    <h4>Hogar</h4>
                  </div>
                  <label class="control-label">Convivientes :</label>
                  <div class="controls">
                    <input type="text" class="span11" placeholder="Ingrese aquí la cantidad de convivientes" />
                  </div>
                  <label class="control-label">Propiedad :</label>
                  <div class="controls">
                    <input type="text" class="span11" placeholder="Ingrese el Tipo de Propiedad" />
                  </div>
                  <label class="control-label">Intalación de Agua :</label>
                  <div class="controls">
                    <input type="text" class="span11" placeholder="Ingrese aquí si la propiedad posee acceso al agua" />
                  </div>
                  <label class="control-label">Instalaciones Cloacales :</label>
                  <div class="controls">
                    <input type="text" class="span11" placeholder="Ingrese aquí si la propiedad posee Instalaciones Cloacales" />
                  </div>
                  <label class="control-label">Letrina :</label>
                  <div class="controls">
                    <input type="text" class="span11" placeholder="Ingrese aquí si la propiedad posee letrinas" />
                  </div>
                  <label class="control-label">Hacinamiento :</label>
                  <div class="controls">
                    <input type="text" class="span11" placeholder="Ingrese aquí si los convivientes se encuentran viviendo en situación de hacinamiento" />
                  </div>
                  <label class="control-label">Piso :</label>
                  <div class="controls">
                    <input type="text" class="span11" placeholder="Ingrese aquí si la propiedad posee pisos, y de que tipo" />
                  </div>
                  <label class="control-label">Cod. Paredes :</label>
                  <div class="controls">
                    <select >
                      <option>Seleccionar el cod. de las paredes</option>
                    </select>
                  </div>
                  <label class="control-label">Cod. Techo :</label>
                  <div class="controls">
                    <select >
                      <option>Seleccionar el cod. del techo</option>
                    </select>
                  </div>
                  <label class="control-label">Cod. Proc. Agua :</label>
                  <div class="controls">
                    <select >
                      <option>Seleccionar el cod. de proc. agua</option>
                    </select>
                  </div>
                  <label class="control-label">Numero de Habitaciones :</label>
                  <div class="controls">
                    <input type="text" class="span11" placeholder="Ingrese aquí si el número de habitaciones que posee la propiedad" />
                  </div>
                  <label class="control-label">Tipo de Vivienda :</label>
                  <div class="controls">
                    <input type="text" class="span11" placeholder="Ingrese aquí el tipo de vivienda" />
                  </div>
                </div>
                <div class="control-group">
                  <div class="text-center">
                    <h4>Observaciones</h4>
                  </div>
                  <label class="control-label">Observaciones :</label>
                  <div class="controls">
                    <textarea class="span11" >Ingresar aquí las observaciones</textarea>
                  </div>
                </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>         
    </div>
 @include('layouts.footers.auth')


@endsection


