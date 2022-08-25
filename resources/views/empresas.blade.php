@extends('templates.index')

@section('empresas')

<style>
    .empresa-index{
        /*border: 1px solid white;*/
        position: relative;
        width: 100%;
        height: 100%;
        
    }
    .empresa-index-2{
        position: relative;
        /*border: 1px solid white;*/
        margin: 5px 5px 5px 5px;
        width: 75%;
        left:12%;
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        
    }
    .empresa-index-h2{
        color: white;
        font-size: 22px;
        margin-left: 10px;
    }
    .empresa-form{
        border: 1px solid white;
        background-color: white;
        padding: 10px 10px 0 10px;
        height: 100px;
    }
    .empresa-btn-form{
        display: inline-block;
    }
    .empresa-btn-ej{
        position: relative;
        margin-left: 670px;
        width: 100px;
        height: 40px;
        border-radius: 5px;
        border: none;
        box-shadow: 0 0 1px 1px grey;
        background-color: #28a745;;
        color: aliceblue
    }
    .empresa-search{
        width: 200px;
        height: 40px;
        border-radius: 5px;
        border: none;
        box-shadow: 0 0 1px 1px grey;
    }
    .empresa-btn-form-s{
        width: 100px;
        height: 40px;
        border-radius: 5px;
        border: none;
        box-shadow: 0 0 1px 1px grey;
        background-color: #4a9bcc;
        color: aliceblue
    }
    .form-header{
        padding: 10px 0 0 10px;
    }
</style>
    
<div class="empresa-index">
    <div class="empresa-index-2">
        <h3 class="empresa-index-h2"> Empresas </h2>
        <div class="empresa-form">
            <div class="form-header">
                <input type="text" placeholder="   Buscar" class="empresa-search">
                <form action="" method="POST" class="empresa-btn-form">
                    <button type="submit" class="empresa-btn-form-s">Buscar</button>
                </form>
                <button type="button" class="empresa-btn-ej">Ejecutar</button>
            </div>

            <hr>
            
        </div>
    </div>
</div>

@endsection
