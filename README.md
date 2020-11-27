## INSTRUCCIONES PARA MAC 
 ( WARREN EDITA ACA )

## INSTRUCCIONES PARA WINDOWS 

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## GUIA PARA CONTRIBUIDORES 

bueno, hago este tutorial para los que estamos trabajando en conjunto con los
 fines de que no trabajemos en distintos proyectos
  y tengamos todo las mismas versiones de programas


## COMPONENTES BASICOS A TENER INSTALADOS
    IDLE : Visual Code o el de su preferencia. Siempre y cuando puedan ver PHP
    XAMPP : https://www.apachefriends.org/xampp-files/7.2.34/xampp-windows-x64-7.2.34-0-VC15-installer.exe
        Incluye: 
            Apache 2.4.46,
            MariaDB 10.4.14, 
            PHP 7.2.34, 
            phpMyAdmin 5.0.3,
            OpenSSL 1.1.1, 
            XAMPP Control Panel 3.2.4,
            Webalizer 2.23-04, 
            Mercury Mail Transport System 4.63,
            FileZilla FTP Server 0.9.41,
            Tomcat 7.0.106 (with mod_proxy_ajp as connector),
            Strawberry Perl 5.32.0.1 Portable

## LARAVEL 8
Dentro de la carpeta htdocs crear una carpeta llamada: 'hogardedia' aquí se creara el Proyecto con los siguientes pasos:

    Seguir pasos de instalación de la página.
    link: https://laravel.com/docs/8.x

        (curso rapido de LARAVEL 8 para aprender): 
        link de cursito: https://www.youtube.com/watch?v=A-BL8Ir7puE&list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF
        
    --- INSTALACIÓN DE PLANTILLA ADMIN "ARGON"
    Para verla en vivo:  https://www.creative-tim.com/live/argon-dashboard-laravel

    Link de Plantilla: https://www.creative-tim.com/product/argon-dashboard-laravel/?partner=91096

    Link de instalación : https://argon-dashboard-laravel.creative-tim.com/docs/getting-started/installation.html
            ## Para aprender formularios y etc.
            https://demos.creative-tim.com/argon-dashboard/docs/components/forms.html


## INSTALAR GIT (en caso de tener instalado saltear este paso):
    link de descarga de git: https://git-scm.com/downloads
  

##      EMPEZAR A USAR
## LLEGADO A ESTE PUNTO:
    1) Abrir XAMPP
    comenzar los servicios de apache y mysql
    entrar en el admin de mysql
    crear una base de datos con el nombre hogardedia, que no tenga nada

## UNA VEZ INSTALADO TODO recien ahi vamos a CLONAR EL PROYECTO

     Para clonar el proyecto nos vamos a la Carpeta donde instalamos el /xampp/htdocs 
     en la barra de direccion ponemos CMD
     una vez abierta la consola ponemos git clone https://github.com/AgostinaGallo/hogardedia.git
     despues abrimos en nuestro IDLE la carpeta. y hacemos las modificaciones. 

     una vez hechas las modificaciones tenemos que abrir el cmd o una terminal (gitbash tmb se puede usar)
     y subir con los siguientes comandos. 

    ir ejecutando uno a uno.    
        git init

        git add [el archivo con su extension y/o carpeta] 

        git commit -m "Modifique [el archivo con su extension y/o carpeta]  "

        git remote set-url origin https://github.com/AgostinaGallo/hogardedia.git

        git push -u origin main

        Avisar preferentemente el cambio en el grupo de whatsapp 
        
## CLONADO EL PROYECTO
    abrir nuevamente la terminal en la direccion /xampp/htdocs/hogardedia  y ejecutar 
    php artisan migrate 
    
    
    Se puede buscar en la documentacion de laravel. 
  

https://github.com/guidohalley


