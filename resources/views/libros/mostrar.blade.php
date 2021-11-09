@extends('layout.plantilla')
@section('title','Libro')
@section('contenido')
<br><br>
    <div class="jumbotron jumbotron-fluid">
        <h1 class="display-4 text-center">Datos de libros</h1>
        <div class="container">                                                               
            <p class="lead">
                <div class="card mt-3"> 
                    <div class="card-body bg-white" >
                        <p><strong>Titulo del Libro: </strong>{{$libro->titulo}}</p>
                        <p><strong>Autor: </strong>{{$libro->autor}}</p>
                        <p><strong>Editorial: </strong>{{$libro->editorial}}</p>
                        <p><strong>Fecha: </strong>{{$libro->fecha_publicacion}}</p>
                        <p><strong>Numero de paginas: </strong>{{$libro->numero_pagina}}</p>
                    </div>
                </div>
            </p>    
        </div>
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">           
                    <a href="{{route('libros.index', $libro)}}" class="btn btn-danger"><i class='fas fa-reply-all'>Regresar</i></a>
                </div>
                <div class="col-2"></div>
                <div class="col-4"> 
                    <a href="{{route('libros.edit', $libro)}}" class="btn btn-warning"><i class="far fa-edit"> Editar</i></a>
                </div>
            </div>
        </div>
    </div>
@endsection