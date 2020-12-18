<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">    
            <img src="{{ asset('argon') }}/img/brand/logo1.png" class="navbar-brand-img" style="width:200px;height:200px; alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Bienvenido!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('Mi perfil') }}</span>
                    </a>                  
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Cerrar Sesión') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Buscar') }}" aria-label="Buscar">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Principal') }}
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">
                      <i class="ni ni-bullet-list-67 text-default"></i>
                      <span class="nav-link-text">Tablas/Informes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-participantes" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-participantes">
                        <i class="ni ni-badge text-pink"></i>
                        <span class="nav-link-text" style="color: #f4645f;">{{ __('Participante/Familias') }}</span>
                    </a>

                    <div class="collapse show" id="navbar-participantes">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('participantes.index') }}">
                                    {{ __('Admisiones') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    {{ __('Asistencias') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> 
            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">Sistema</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
                    <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="ni ni-circle-08 text-pink"></i>
                        <span class="nav-link-text" style="color: #f4645f;">{{ __('Usuarios') }}</span>
                    </a>
                    <div class="collapse show" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Perfil de este usuario') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    {{ __('Todos los usuarios') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>         

<tbody class="list">
            
            <tr>
                <th scope="row">
                    <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          
                            
                              <img alt="Image placeholder" src="../../assets/img/theme/bootstrap.jpg">
                            
                          
                        </a>
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Argon Design System</span>
                        </div>
                    </div>
                </th>
                <td class="budget">
                    $2500 USD
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-warning"></i>
                      <span class="status">pending</span>
                    </span>
                </td>
                <td>
                    















  
    <div class="avatar-group">
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
            <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
            <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
            <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
            <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
        </a>
    </div>
  



                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <span class="completion mr-2">60%</span>
                        <div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </td>
            </tr>
            
            <tr>
                <th scope="row">
                    <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          
                            
                              <img alt="Image placeholder" src="../../assets/img/theme/angular.jpg">
                            
                          
                        </a>
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                        </div>
                    </div>
                </th>
                <td class="budget">
                    $1800 USD
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-success"></i>
                      <span class="status">completed</span>
                    </span>
                </td>
                <td>
                    















  
    <div class="avatar-group">
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
            <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
            <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
            <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
            <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
        </a>
    </div>
  



                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <span class="completion mr-2">100%</span>
                        <div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </td>
            </tr>
            
            <tr>
                <th scope="row">
                    <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          
                            
                              <img alt="Image placeholder" src="../../assets/img/theme/sketch.jpg">
                            
                          
                        </a>
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Black Dashboard</span>
                        </div>
                    </div>
                </th>
                <td class="budget">
                    $3150 USD
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-danger"></i>
                      <span class="status">delayed</span>
                    </span>
                </td>
                <td>
                    















  
    <div class="avatar-group">
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
            <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
            <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
            <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
            <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
        </a>
    </div>
  



                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <span class="completion mr-2">72%</span>
                        <div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </td>
            </tr>
            
            <tr>
                <th scope="row">
                    <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          
                            
                              <img alt="Image placeholder" src="../../assets/img/theme/react.jpg">
                            
                          
                        </a>
                        <div class="media-body">
                            <span class="name mb-0 text-sm">React Material Dashboard</span>
                        </div>
                    </div>
                </th>
                <td class="budget">
                    $4400 USD
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-info"></i>
                      <span class="status">on schedule</span>
                    </span>
                </td>
                <td>
                    















  
    <div class="avatar-group">
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
            <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
            <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
            <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
            <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
        </a>
    </div>
  



                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <span class="completion mr-2">90%</span>
                        <div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </td>
            </tr>
            
            <tr>
                <th scope="row">
                    <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          
                            
                              <img alt="Image placeholder" src="../../assets/img/theme/vue.jpg">
                            
                          
                        </a>
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Vue Paper UI Kit PRO</span>
                        </div>
                    </div>
                </th>
                <td class="budget">
                    $2200 USD
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-success"></i>
                      <span class="status">completed</span>
                    </span>
                </td>
                <td>
                    















  
    <div class="avatar-group">
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
            <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
            <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
            <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
            <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
        </a>
    </div>
  



                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <span class="completion mr-2">100%</span>
                        <div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </td>
            </tr>
            
            <tr>
                <th scope="row">
                    <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          
                            
                              <img alt="Image placeholder" src="../../assets/img/theme/bootstrap.jpg">
                            
                          
                        </a>
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Argon Design System</span>
                        </div>
                    </div>
                </th>
                <td class="budget">
                    $2500 USD
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-warning"></i>
                      <span class="status">pending</span>
                    </span>
                </td>
                <td>
                    















  
    <div class="avatar-group">
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
            <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
            <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
            <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
            <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
        </a>
    </div>
  



                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <span class="completion mr-2">60%</span>
                        <div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </td>
            </tr>
            
            <tr>
                <th scope="row">
                    <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          
                            
                              <img alt="Image placeholder" src="../../assets/img/theme/angular.jpg">
                            
                          
                        </a>
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                        </div>
                    </div>
                </th>
                <td class="budget">
                    $1800 USD
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-success"></i>
                      <span class="status">completed</span>
                    </span>
                </td>
                <td>
                    















  
    <div class="avatar-group">
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
            <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
            <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
            <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
            <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
        </a>
    </div>
  



                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <span class="completion mr-2">100%</span>
                        <div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </td>
            </tr>
            
            <tr>
                <th scope="row">
                    <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          
                            
                              <img alt="Image placeholder" src="../../assets/img/theme/sketch.jpg">
                            
                          
                        </a>
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Black Dashboard</span>
                        </div>
                    </div>
                </th>
                <td class="budget">
                    $3150 USD
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-danger"></i>
                      <span class="status">delayed</span>
                    </span>
                </td>
                <td>
                    















  
    <div class="avatar-group">
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
            <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
            <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
            <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
            <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
        </a>
    </div>
  



                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <span class="completion mr-2">72%</span>
                        <div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </td>
            </tr>
            
            <tr>
                <th scope="row">
                    <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          
                            
                              <img alt="Image placeholder" src="../../assets/img/theme/angular.jpg">
                            
                          
                        </a>
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                        </div>
                    </div>
                </th>
                <td class="budget">
                    $1800 USD
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-success"></i>
                      <span class="status">completed</span>
                    </span>
                </td>
                <td>
                    















  
    <div class="avatar-group">
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
            <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
            <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
            <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
            <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
        </a>
    </div>
  



                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <span class="completion mr-2">100%</span>
                        <div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </td>
            </tr>
            
            <tr>
                <th scope="row">
                    <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          
                            
                              <img alt="Image placeholder" src="../../assets/img/theme/sketch.jpg">
                            
                          
                        </a>
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Black Dashboard</span>
                        </div>
                    </div>
                </th>
                <td class="budget">
                    $3150 USD
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-danger"></i>
                      <span class="status">delayed</span>
                    </span>
                </td>
                <td>
                    















  
    <div class="avatar-group">
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
            <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
            <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
            <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
            <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
        </a>
    </div>
  



                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <span class="completion mr-2">72%</span>
                        <div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </td>
            </tr>
            
            <tr>
                <th scope="row">
                    <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          
                            
                              <img alt="Image placeholder" src="../../assets/img/theme/react.jpg">
                            
                          
                        </a>
                        <div class="media-body">
                            <span class="name mb-0 text-sm">React Material Dashboard</span>
                        </div>
                    </div>
                </th>
                <td class="budget">
                    $4400 USD
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-info"></i>
                      <span class="status">on schedule</span>
                    </span>
                </td>
                <td>
                    















  
    <div class="avatar-group">
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
            <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
            <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
            <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
        </a>
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
            <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
        </a>
    </div>
  



                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <span class="completion mr-2">90%</span>
                        <div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </td>
            </tr>
            
        </tbody>				
            </ul>
        </div>
    </div>
</nav>
