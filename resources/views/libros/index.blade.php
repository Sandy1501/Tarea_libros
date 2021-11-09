@extends('layout.plantilla')
@section('title','Lista de libros')
@section('contenido')

<div class="row mt-5">
    <div class="col">
        <h1 class="text-center display-4 text-dark" ><strong>Lista de libros</strong></h1>    
    </div>
</div>
<div class="row mt-5">
    <div class="col">
        
        <li class="list-group-item">
            <table class="table table-dark table-striped">
                    <thead >
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Editorial</th>
                            <th scope="col">Fecha de publicacion</th>
                            <th scope="col">Numero de paginas</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>               
                <tbody>
                    @foreach($libro as $libros)
                    <tr>
                        <th>{{$libros->id}}</th>
                        <th>{{$libros->titulo}}</th>
                        <th>{{$libros->autor}}</th>
                        <th>{{$libros->editorial}}</th>
                        <th>{{$libros->fecha_publicacion}}</th>
                        <th>{{$libros->numero_pagina}}</th>                        
                        <th><a class="btn btn-warning" href="{{route('libros.mostrar', $libros->id)}}"><i class="fas fa-pen"></i></a></th>
                        <th>
                            <form action="{{route('libros.destroy', $libros)}}" method="POST">
                            @csrf    
                            @method('delete')
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </th>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </li>           
    </div>
</div>
@endsection
@section('pagina')
{{$libro->links()}}
@endsection