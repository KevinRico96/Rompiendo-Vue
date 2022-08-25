<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/estilosBO.css') }}">
    <title>BackOffice Clon</title>
    <style>
    body{
        margin: 0px 0px 0px 0px;
    }
    .encabezado{

    /*border: 1px solid black;*/
    height: 75px;
    background-color: #fff;
    box-shadow: 0 0 2px 2px black;
   

    }
    .navegacion{
        display: flex;
        margin-left: 620px;
        position: relative;
        top: -15px;
        
    }
    .nav-link, .nav-btn{
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        text-decoration: none;
        color: #6c757d; 
        margin-left: 5px;
        font-size: 18px;
    }
    .nav-btn-2{
        border: 1px solid  #6c757d;
        width: 130px;
        height: 40px;
        font-size: 17px; 
    }
    .logo{
        margin-left: 30px;
        margin-top: 20px; 
    }
    .logo, .navegacion{
        display: inline-block;
        /*border: 1px solid red;*/

    }
    .logo-bo{
        display: inline-block;
    }
    .logo-img{
        width: 25%;
    }
    .nav-btn{
        display: inline-block;
    }
    .nav-btn-2{
        border-radius: 5px;
        background-color: #fff;
        color: #6c757d;
    }
    .cuerpo{
        border: 1px solid salmon;
        background-color: #3781ae;
        width: 100%;
        height: 800px;
    }
    </style>
</head>
<body>
    <div class="encabezado">

        <!--          Logo proyecto       -->

        <div class="logo">
            <img src=" {{ asset('./image/Colppy.png') }}" class="logo-img"> 
            BackOffice
           
        </div>

        <!-- -------Barra de navegacion------- -->

        <div class="navegacion">
            <a href="{{-- route('usuarios') --}}" class="nav-link">Usuarios</a>
            <a href="{{ route('empresas.view') }}" class="nav-link">Empresas</a>
            <span class="nav-link">Editar perfil</span>
            <form action="#" method="POST" class="nav-btn">
                <button type="submit" class="nav-btn-2">Cerrar sesión</button> 
            </form>   
        </div>
    </div>
    <div class="cuerpo">
        @yield('empresas')
    </div>
    
       
</body>
</html>