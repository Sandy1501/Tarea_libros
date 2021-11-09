<?php

namespace Database\Seeders;
use App\Models\Libros;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libros = new Libros();

        $libros->titulo="Orgullo y prejuicio";
        $libros->autor="Jane Austen";
        $libros->editorial="Alma";
        $libros->fecha_publicacion="1813-01-08";
        $libros->numero_pagina="298";
        
        $libros->save();

        $libros2= new Libros();
        
        $libros2->titulo="El principito";
        $libros2->autor="Antoine de Saint-Exupéry";
        $libros2->editorial="Editorial Planeta";
        $libros2->fecha_publicacion="1943-04-06";
        $libros2->numero_pagina="96";

        $libros2->save();

        $libros3= new Libros();
        
        $libros3->titulo="Bajo la misma estrella";
        $libros3->autor="John Green";
        $libros3->editorial=" Random House";
        $libros3->fecha_publicacion="2012-01-10";
        $libros3->numero_pagina="302";

        $libros3->save();

        $libros4= new Libros();
        
        $libros4->titulo="El cuaderno de Noah";
        $libros4->autor="Nicholas Sparks";
        $libros4->editorial="The Notebook";
        $libros4->fecha_publicacion="1996-10-01";
        $libros4->numero_pagina="214";

        $libros4->save();

        $libros5= new Libros();
        
        $libros5->titulo="Yo antes de ti";
        $libros5->autor="Jojo Moyes";
        $libros5->editorial="Penguin Books";
        $libros5->fecha_publicacion="2012-01-05";
        $libros5->numero_pagina="480";

        $libros5->save();
        
    }
}
