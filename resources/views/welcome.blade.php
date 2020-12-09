@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Bienvenido al Sistema del Hogar de Día') }}</h1>                    
                        

                    </div>
                <div class="card" style="width: 100rem;">
                    
                    <div class="card-body">
                        <h5 class="card-title">Centro de Prevención, Promoción y Atención Integral del Niño, Niña y Adolescente en Situación de Vulnerabilidad</h5>
                        <p class="card-text">El Hogar de Día fue creado por Ley II Nº 22 sancionada el 30 de julio de 2009, bajo los mismos criterios de la Convención Internacional de los Derechos del Niño y la Ley Nacional Nº 26.061 y la Provincial Le II Nº 16 de Protección Integral de los Derechos de Niñas, Niños y Adolescentes, normas que establecen el rol del Estado en la tarea de garantizar el cumplimiento de estos derechos y dar soporte a las familias para ejercer su papel prioritario e indelegable en el cuidado de sus hijos e hijas.

                            El Hogar de Día abrió sus puertas en septiembre de 2009  con la misión de lograr el bienestar físico-psíquico, la formación y la inserción social de los chicos que se encuentran en situación de vulnerabilidad y riesgo social. Su visión es una sociedad con niños, niñas y adolescentes en ejercicio pleno de sus derechos.
                            
                            Se trabaja, con un equipo interdisciplinario de profesionales, en la prevención para disminuir los factores de riesgos dentro del ámbito familiar y comunitario. Y se fomentan hábitos y actividades saludables en la vida cotidiana para el desarrollo integral de los chicos.
                            
                            La institución, que desde diciembre de 2013 funciona bajo la órbita de la Subsecretaria de Atención Integral Comunitaria, de la Niñez, Adolescencia y Familia, considera a la salud integral como eje articulador y  brinda el acompañamiento para el desarrollo pleno de los derechos de los niños, niñas y adolescentes.
                            
                            En el Hogar los chicos de entre 0 a 18 años,  junto a sus familias, reciben contención y se trabaja en el fortalecimiento familiar.
                            
                            </p>
                        <a href="https://salud.misiones.gob.ar/hogar-de-dia-2/" class="btn btn-primary">+INFO</a>
                </div>    
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
@endsection
