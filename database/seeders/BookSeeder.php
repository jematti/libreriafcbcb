<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'titulo' => 'Piedra de Agua N° 1',
            'edicion' => 'Primera',
            'numero_paginas' => '32',
            'fecha_publicacion' => '2013/08/01',
            'idioma' => 'español',
            'resumen' => 'Vivimos tiempos de cambio y las instituciones
            del Estado debemos estar a la altura que las circunstancias
            históricas exigen, con mayor razón si se trata de una entidad
            como la Fundación Cultural del
            Banco Central de Bolivia que promueve la interacción de la sociedad,
            desarrollando medios que posibilitan la participación y el acceso de la
            comunidad a las expresiones culturales, artísticas y científicas
            en cada uno de los Centros Culturales a su cargo.
            A través de los diferentes programas que desarrollan
            nuestros Centros Culturales se hace posible el rescate y registro
            del patrimonio nacional, la difusión especializada de la
            herencia histórica, cultural y documental; la apertura a las diferentes
            manifestaciones artísticas y de encuentro, creando y
            ampliando los espacios posibles y, también, lo supuestamente
            imposible; así como la promoción a un mayor acceso de la
            población a nuestros repositorios a través de sus exposiciones
            itinerantes y de sus diferentes programas de difusión que
            llevan el museo más allá de su espacio físico',
            'imagen' => 'PA1.png',
            'precio' => '20',
            'author_id' => '1',
            'editorial_id' => '1',
            'category_id' => '1',
            'repository_id' => '2',
        ]);

        DB::table('books')->insert([
            'titulo' => 'Piedra de Agua N° 2',
            'edicion' => 'Primera',
            'numero_paginas' => '32',
            'fecha_publicacion' => '2013/10/01',
            'idioma' => 'español',
            'resumen' => 'Vivimos tiempos de cambio y las instituciones
            del Estado debemos estar a la altura que las circunstancias
            históricas exigen, con mayor razón si se trata de una entidad
            como la Fundación Cultural del
            Banco Central de Bolivia que promueve la interacción de la sociedad,
            desarrollando medios que posibilitan la participación y el acceso de la
            comunidad a las expresiones culturales, artísticas y científicas
            en cada uno de los Centros Culturales a su cargo.
            A través de los diferentes programas que desarrollan
            nuestros Centros Culturales se hace posible el rescate y registro
            del patrimonio nacional, la difusión especializada de la
            herencia histórica, cultural y documental; la apertura a las diferentes
            manifestaciones artísticas y de encuentro, creando y
            ampliando los espacios posibles y, también, lo supuestamente
            imposible; así como la promoción a un mayor acceso de la
            población a nuestros repositorios a través de sus exposiciones
            itinerantes y de sus diferentes programas de difusión que
            llevan el museo más allá de su espacio físico',
            'imagen' => 'PA2.png',
            'precio' => '20',
            'author_id' => '1',
            'editorial_id' => '1',
            'category_id' => '1',
            'repository_id' => '2',
        ]);
        DB::table('books')->insert([
            'titulo' => 'Piedra de Agua N° 3',
            'edicion' => 'Primera',
            'numero_paginas' => '32',
            'fecha_publicacion' => '2013/12/01',
            'idioma' => 'español',
            'resumen' => 'Vivimos tiempos de cambio y las instituciones
            del Estado debemos estar a la altura que las circunstancias
            históricas exigen, con mayor razón si se trata de una entidad
            como la Fundación Cultural del
            Banco Central de Bolivia que promueve la interacción de la sociedad,
            desarrollando medios que posibilitan la participación y el acceso de la
            comunidad a las expresiones culturales, artísticas y científicas
            en cada uno de los Centros Culturales a su cargo.
            A través de los diferentes programas que desarrollan
            nuestros Centros Culturales se hace posible el rescate y registro
            del patrimonio nacional, la difusión especializada de la
            herencia histórica, cultural y documental; la apertura a las diferentes
            manifestaciones artísticas y de encuentro, creando y
            ampliando los espacios posibles y, también, lo supuestamente
            imposible; así como la promoción a un mayor acceso de la
            población a nuestros repositorios a través de sus exposiciones
            itinerantes y de sus diferentes programas de difusión que
            llevan el museo más allá de su espacio físico',
            'imagen' => 'PA3.png',
            'precio' => '20',
            'author_id' => '1',
            'editorial_id' => '1',
            'category_id' => '1',
            'repository_id' => '2',
        ]);
        DB::table('books')->insert([
            'titulo' => 'Piedra de Agua N° 4',
            'edicion' => 'Primera',
            'numero_paginas' => '32',
            'fecha_publicacion' => '2014/02/01',
            'idioma' => 'español',
            'resumen' => 'Vivimos tiempos de cambio y las instituciones
            del Estado debemos estar a la altura que las circunstancias
            históricas exigen, con mayor razón si se trata de una entidad
            como la Fundación Cultural del
            Banco Central de Bolivia que promueve la interacción de la sociedad,
            desarrollando medios que posibilitan la participación y el acceso de la
            comunidad a las expresiones culturales, artísticas y científicas
            en cada uno de los Centros Culturales a su cargo.
            A través de los diferentes programas que desarrollan
            nuestros Centros Culturales se hace posible el rescate y registro
            del patrimonio nacional, la difusión especializada de la
            herencia histórica, cultural y documental; la apertura a las diferentes
            manifestaciones artísticas y de encuentro, creando y
            ampliando los espacios posibles y, también, lo supuestamente
            imposible; así como la promoción a un mayor acceso de la
            población a nuestros repositorios a través de sus exposiciones
            itinerantes y de sus diferentes programas de difusión que
            llevan el museo más allá de su espacio físico',
            'imagen' => 'PA4.png',
            'precio' => '20',
            'author_id' => '1',
            'editorial_id' => '1',
            'category_id' => '1',
            'repository_id' => '2',
        ]);
        DB::table('books')->insert([
            'titulo' => 'Piedra de Agua N° 5',
            'edicion' => 'Primera',
            'numero_paginas' => '32',
            'fecha_publicacion' => '2014/04/01',
            'idioma' => 'español',
            'resumen' => 'Vivimos tiempos de cambio y las instituciones
            del Estado debemos estar a la altura que las circunstancias
            históricas exigen, con mayor razón si se trata de una entidad
            como la Fundación Cultural del
            Banco Central de Bolivia que promueve la interacción de la sociedad,
            desarrollando medios que posibilitan la participación y el acceso de la
            comunidad a las expresiones culturales, artísticas y científicas
            en cada uno de los Centros Culturales a su cargo.
            A través de los diferentes programas que desarrollan
            nuestros Centros Culturales se hace posible el rescate y registro
            del patrimonio nacional, la difusión especializada de la
            herencia histórica, cultural y documental; la apertura a las diferentes
            manifestaciones artísticas y de encuentro, creando y
            ampliando los espacios posibles y, también, lo supuestamente
            imposible; así como la promoción a un mayor acceso de la
            población a nuestros repositorios a través de sus exposiciones
            itinerantes y de sus diferentes programas de difusión que
            llevan el museo más allá de su espacio físico',
            'imagen' => 'PA5.png',
            'precio' => '20',
            'author_id' => '1',
            'editorial_id' => '1',
            'category_id' => '1',
            'repository_id' => '2',
        ]);
        DB::table('books')->insert([
            'titulo' => 'Piedra de Agua N° 6',
            'edicion' => 'Primera',
            'numero_paginas' => '32',
            'fecha_publicacion' => '2014/06/01',
            'idioma' => 'español',
            'resumen' => 'Vivimos tiempos de cambio y las instituciones
            del Estado debemos estar a la altura que las circunstancias
            históricas exigen, con mayor razón si se trata de una entidad
            como la Fundación Cultural del
            Banco Central de Bolivia que promueve la interacción de la sociedad,
            desarrollando medios que posibilitan la participación y el acceso de la
            comunidad a las expresiones culturales, artísticas y científicas
            en cada uno de los Centros Culturales a su cargo.
            A través de los diferentes programas que desarrollan
            nuestros Centros Culturales se hace posible el rescate y registro
            del patrimonio nacional, la difusión especializada de la
            herencia histórica, cultural y documental; la apertura a las diferentes
            manifestaciones artísticas y de encuentro, creando y
            ampliando los espacios posibles y, también, lo supuestamente
            imposible; así como la promoción a un mayor acceso de la
            población a nuestros repositorios a través de sus exposiciones
            itinerantes y de sus diferentes programas de difusión que
            llevan el museo más allá de su espacio físico',
            'imagen' => 'PA6.png',
            'precio' => '20',
            'author_id' => '1',
            'editorial_id' => '1',
            'category_id' => '1',
            'repository_id' => '2',
        ]);
        DB::table('books')->insert([
            'titulo' => 'Piedra de Agua N° 7',
            'edicion' => 'Primera',
            'numero_paginas' => '32',
            'fecha_publicacion' => '2014/08/01',
            'idioma' => 'español',
            'resumen' => 'Vivimos tiempos de cambio y las instituciones
            del Estado debemos estar a la altura que las circunstancias
            históricas exigen, con mayor razón si se trata de una entidad
            como la Fundación Cultural del
            Banco Central de Bolivia que promueve la interacción de la sociedad,
            desarrollando medios que posibilitan la participación y el acceso de la
            comunidad a las expresiones culturales, artísticas y científicas
            en cada uno de los Centros Culturales a su cargo.
            A través de los diferentes programas que desarrollan
            nuestros Centros Culturales se hace posible el rescate y registro
            del patrimonio nacional, la difusión especializada de la
            herencia histórica, cultural y documental; la apertura a las diferentes
            manifestaciones artísticas y de encuentro, creando y
            ampliando los espacios posibles y, también, lo supuestamente
            imposible; así como la promoción a un mayor acceso de la
            población a nuestros repositorios a través de sus exposiciones
            itinerantes y de sus diferentes programas de difusión que
            llevan el museo más allá de su espacio físico',
            'imagen' => 'PA7.png',
            'precio' => '20',
            'author_id' => '1',
            'editorial_id' => '1',
            'category_id' => '1',
            'repository_id' => '2',
        ]);
        DB::table('books')->insert([
            'titulo' => 'Piedra de Agua N° 8',
            'edicion' => 'Primera',
            'numero_paginas' => '32',
            'fecha_publicacion' => '2014/10/01',
            'idioma' => 'español',
            'resumen' => 'Vivimos tiempos de cambio y las instituciones
            del Estado debemos estar a la altura que las circunstancias
            históricas exigen, con mayor razón si se trata de una entidad
            como la Fundación Cultural del
            Banco Central de Bolivia que promueve la interacción de la sociedad,
            desarrollando medios que posibilitan la participación y el acceso de la
            comunidad a las expresiones culturales, artísticas y científicas
            en cada uno de los Centros Culturales a su cargo.
            A través de los diferentes programas que desarrollan
            nuestros Centros Culturales se hace posible el rescate y registro
            del patrimonio nacional, la difusión especializada de la
            herencia histórica, cultural y documental; la apertura a las diferentes
            manifestaciones artísticas y de encuentro, creando y
            ampliando los espacios posibles y, también, lo supuestamente
            imposible; así como la promoción a un mayor acceso de la
            población a nuestros repositorios a través de sus exposiciones
            itinerantes y de sus diferentes programas de difusión que
            llevan el museo más allá de su espacio físico',
            'imagen' => 'PA8.png',
            'precio' => '20',
            'author_id' => '1',
            'editorial_id' => '1',
            'category_id' => '1',
            'repository_id' => '2',
        ]);
        DB::table('books')->insert([
            'titulo' => 'Piedra de Agua N° 9',
            'edicion' => 'Primera',
            'numero_paginas' => '32',
            'fecha_publicacion' => '2014/12/01',
            'idioma' => 'español',
            'resumen' => 'Vivimos tiempos de cambio y las instituciones
            del Estado debemos estar a la altura que las circunstancias
            históricas exigen, con mayor razón si se trata de una entidad
            como la Fundación Cultural del
            Banco Central de Bolivia que promueve la interacción de la sociedad,
            desarrollando medios que posibilitan la participación y el acceso de la
            comunidad a las expresiones culturales, artísticas y científicas
            en cada uno de los Centros Culturales a su cargo.
            A través de los diferentes programas que desarrollan
            nuestros Centros Culturales se hace posible el rescate y registro
            del patrimonio nacional, la difusión especializada de la
            herencia histórica, cultural y documental; la apertura a las diferentes
            manifestaciones artísticas y de encuentro, creando y
            ampliando los espacios posibles y, también, lo supuestamente
            imposible; así como la promoción a un mayor acceso de la
            población a nuestros repositorios a través de sus exposiciones
            itinerantes y de sus diferentes programas de difusión que
            llevan el museo más allá de su espacio físico',
            'imagen' => 'PA9.png',
            'precio' => '20',
            'author_id' => '1',
            'editorial_id' => '1',
            'category_id' => '1',
            'repository_id' => '2',
        ]);
        DB::table('books')->insert([
            'titulo' => 'Piedra de Agua N° 10',
            'edicion' => 'Primera',
            'numero_paginas' => '32',
            'fecha_publicacion' => '2015/05/01',
            'idioma' => 'español',
            'resumen' => 'Vivimos tiempos de cambio y las instituciones
            del Estado debemos estar a la altura que las circunstancias
            históricas exigen, con mayor razón si se trata de una entidad
            como la Fundación Cultural del
            Banco Central de Bolivia que promueve la interacción de la sociedad,
            desarrollando medios que posibilitan la participación y el acceso de la
            comunidad a las expresiones culturales, artísticas y científicas
            en cada uno de los Centros Culturales a su cargo.
            A través de los diferentes programas que desarrollan
            nuestros Centros Culturales se hace posible el rescate y registro
            del patrimonio nacional, la difusión especializada de la
            herencia histórica, cultural y documental; la apertura a las diferentes
            manifestaciones artísticas y de encuentro, creando y
            ampliando los espacios posibles y, también, lo supuestamente
            imposible; así como la promoción a un mayor acceso de la
            población a nuestros repositorios a través de sus exposiciones
            itinerantes y de sus diferentes programas de difusión que
            llevan el museo más allá de su espacio físico',
            'imagen' => 'PA10.png',
            'precio' => '20',
            'author_id' => '1',
            'editorial_id' => '1',
            'category_id' => '1',
            'repository_id' => '2',
        ]);
        DB::table('books')->insert([
            'titulo' => 'Piedra de Agua N° 11',
            'edicion' => 'Primera',
            'numero_paginas' => '32',
            'fecha_publicacion' => '2015/05/01',
            'idioma' => 'español',
            'resumen' => 'Vivimos tiempos de cambio y las instituciones
            del Estado debemos estar a la altura que las circunstancias
            históricas exigen, con mayor razón si se trata de una entidad
            como la Fundación Cultural del
            Banco Central de Bolivia que promueve la interacción de la sociedad,
            desarrollando medios que posibilitan la participación y el acceso de la
            comunidad a las expresiones culturales, artísticas y científicas
            en cada uno de los Centros Culturales a su cargo.
            A través de los diferentes programas que desarrollan
            nuestros Centros Culturales se hace posible el rescate y registro
            del patrimonio nacional, la difusión especializada de la
            herencia histórica, cultural y documental; la apertura a las diferentes
            manifestaciones artísticas y de encuentro, creando y
            ampliando los espacios posibles y, también, lo supuestamente
            imposible; así como la promoción a un mayor acceso de la
            población a nuestros repositorios a través de sus exposiciones
            itinerantes y de sus diferentes programas de difusión que
            llevan el museo más allá de su espacio físico',
            'imagen' => 'PA11.png',
            'precio' => '20',
            'author_id' => '1',
            'editorial_id' => '1',
            'category_id' => '1',
            'repository_id' => '2',
        ]);
        DB::table('books')->insert([
            'titulo' => 'Piedra de Agua N° 12',
            'edicion' => 'Primera',
            'numero_paginas' => '32',
            'fecha_publicacion' => '2015/08/01',
            'idioma' => 'español',
            'resumen' => 'Vivimos tiempos de cambio y las instituciones
            del Estado debemos estar a la altura que las circunstancias
            históricas exigen, con mayor razón si se trata de una entidad
            como la Fundación Cultural del
            Banco Central de Bolivia que promueve la interacción de la sociedad,
            desarrollando medios que posibilitan la participación y el acceso de la
            comunidad a las expresiones culturales, artísticas y científicas
            en cada uno de los Centros Culturales a su cargo.
            A través de los diferentes programas que desarrollan
            nuestros Centros Culturales se hace posible el rescate y registro
            del patrimonio nacional, la difusión especializada de la
            herencia histórica, cultural y documental; la apertura a las diferentes
            manifestaciones artísticas y de encuentro, creando y
            ampliando los espacios posibles y, también, lo supuestamente
            imposible; así como la promoción a un mayor acceso de la
            población a nuestros repositorios a través de sus exposiciones
            itinerantes y de sus diferentes programas de difusión que
            llevan el museo más allá de su espacio físico',
            'imagen' => 'PA12.png',
            'precio' => '20',
            'author_id' => '1',
            'editorial_id' => '1',
            'category_id' => '1',
            'repository_id' => '2',
        ]);
        DB::table('books')->insert([
            'titulo' => 'Piedra de Agua N° 13',
            'edicion' => 'Primera',
            'numero_paginas' => '32',
            'fecha_publicacion' => '2016/12/01',
            'idioma' => 'español',
            'resumen' => 'Vivimos tiempos de cambio y las instituciones
            del Estado debemos estar a la altura que las circunstancias
            históricas exigen, con mayor razón si se trata de una entidad
            como la Fundación Cultural del
            Banco Central de Bolivia que promueve la interacción de la sociedad,
            desarrollando medios que posibilitan la participación y el acceso de la
            comunidad a las expresiones culturales, artísticas y científicas
            en cada uno de los Centros Culturales a su cargo.
            A través de los diferentes programas que desarrollan
            nuestros Centros Culturales se hace posible el rescate y registro
            del patrimonio nacional, la difusión especializada de la
            herencia histórica, cultural y documental; la apertura a las diferentes
            manifestaciones artísticas y de encuentro, creando y
            ampliando los espacios posibles y, también, lo supuestamente
            imposible; así como la promoción a un mayor acceso de la
            población a nuestros repositorios a través de sus exposiciones
            itinerantes y de sus diferentes programas de difusión que
            llevan el museo más allá de su espacio físico',
            'imagen' => 'PA13.png',
            'precio' => '20',
            'author_id' => '1',
            'editorial_id' => '1',
            'category_id' => '1',
            'repository_id' => '2',
        ]);
        DB::table('books')->insert([
            'titulo' => 'Piedra de Agua N° 14',
            'edicion' => 'Primera',
            'numero_paginas' => '32',
            'fecha_publicacion' => '2015/10/01',
            'idioma' => 'español',
            'resumen' => 'Vivimos tiempos de cambio y las instituciones
            del Estado debemos estar a la altura que las circunstancias
            históricas exigen, con mayor razón si se trata de una entidad
            como la Fundación Cultural del
            Banco Central de Bolivia que promueve la interacción de la sociedad,
            desarrollando medios que posibilitan la participación y el acceso de la
            comunidad a las expresiones culturales, artísticas y científicas
            en cada uno de los Centros Culturales a su cargo.
            A través de los diferentes programas que desarrollan
            nuestros Centros Culturales se hace posible el rescate y registro
            del patrimonio nacional, la difusión especializada de la
            herencia histórica, cultural y documental; la apertura a las diferentes
            manifestaciones artísticas y de encuentro, creando y
            ampliando los espacios posibles y, también, lo supuestamente
            imposible; así como la promoción a un mayor acceso de la
            población a nuestros repositorios a través de sus exposiciones
            itinerantes y de sus diferentes programas de difusión que
            llevan el museo más allá de su espacio físico',
            'imagen' => 'PA14.png',
            'precio' => '20',
            'author_id' => '1',
            'editorial_id' => '1',
            'category_id' => '1',
            'repository_id' => '2',
        ]);
        DB::table('books')->insert([
            'titulo' => 'Piedra de Agua N° 15',
            'edicion' => 'Primera',
            'numero_paginas' => '32',
            'fecha_publicacion' => '2016/03/01',
            'idioma' => 'español',
            'resumen' => 'Vivimos tiempos de cambio y las instituciones
            del Estado debemos estar a la altura que las circunstancias
            históricas exigen, con mayor razón si se trata de una entidad
            como la Fundación Cultural del
            Banco Central de Bolivia que promueve la interacción de la sociedad,
            desarrollando medios que posibilitan la participación y el acceso de la
            comunidad a las expresiones culturales, artísticas y científicas
            en cada uno de los Centros Culturales a su cargo.
            A través de los diferentes programas que desarrollan
            nuestros Centros Culturales se hace posible el rescate y registro
            del patrimonio nacional, la difusión especializada de la
            herencia histórica, cultural y documental; la apertura a las diferentes
            manifestaciones artísticas y de encuentro, creando y
            ampliando los espacios posibles y, también, lo supuestamente
            imposible; así como la promoción a un mayor acceso de la
            población a nuestros repositorios a través de sus exposiciones
            itinerantes y de sus diferentes programas de difusión que
            llevan el museo más allá de su espacio físico',
            'imagen' => 'PA15.png',
            'precio' => '20',
            'author_id' => '1',
            'editorial_id' => '1',
            'category_id' => '1',
            'repository_id' => '2',
        ]);
        DB::table('books')->insert([
            'titulo' => 'Piedra de Agua N° 16',
            'edicion' => 'Primera',
            'numero_paginas' => '32',
            'fecha_publicacion' => '2016/06/01',
            'idioma' => 'español',
            'resumen' => 'Vivimos tiempos de cambio y las instituciones
            del Estado debemos estar a la altura que las circunstancias
            históricas exigen, con mayor razón si se trata de una entidad
            como la Fundación Cultural del
            Banco Central de Bolivia que promueve la interacción de la sociedad,
            desarrollando medios que posibilitan la participación y el acceso de la
            comunidad a las expresiones culturales, artísticas y científicas
            en cada uno de los Centros Culturales a su cargo.
            A través de los diferentes programas que desarrollan
            nuestros Centros Culturales se hace posible el rescate y registro
            del patrimonio nacional, la difusión especializada de la
            herencia histórica, cultural y documental; la apertura a las diferentes
            manifestaciones artísticas y de encuentro, creando y
            ampliando los espacios posibles y, también, lo supuestamente
            imposible; así como la promoción a un mayor acceso de la
            población a nuestros repositorios a través de sus exposiciones
            itinerantes y de sus diferentes programas de difusión que
            llevan el museo más allá de su espacio físico',
            'imagen' => 'PA16.png',
            'precio' => '20',
            'author_id' => '1',
            'editorial_id' => '1',
            'category_id' => '1',
            'repository_id' => '2',
        ]);
        DB::table('books')->insert([
            'titulo' => 'Piedra de Agua N° 17',
            'edicion' => 'Primera',
            'numero_paginas' => '32',
            'fecha_publicacion' => '2016/09/01',
            'idioma' => 'español',
            'resumen' => 'Vivimos tiempos de cambio y las instituciones
            del Estado debemos estar a la altura que las circunstancias
            históricas exigen, con mayor razón si se trata de una entidad
            como la Fundación Cultural del
            Banco Central de Bolivia que promueve la interacción de la sociedad,
            desarrollando medios que posibilitan la participación y el acceso de la
            comunidad a las expresiones culturales, artísticas y científicas
            en cada uno de los Centros Culturales a su cargo.
            A través de los diferentes programas que desarrollan
            nuestros Centros Culturales se hace posible el rescate y registro
            del patrimonio nacional, la difusión especializada de la
            herencia histórica, cultural y documental; la apertura a las diferentes
            manifestaciones artísticas y de encuentro, creando y
            ampliando los espacios posibles y, también, lo supuestamente
            imposible; así como la promoción a un mayor acceso de la
            población a nuestros repositorios a través de sus exposiciones
            itinerantes y de sus diferentes programas de difusión que
            llevan el museo más allá de su espacio físico',
            'imagen' => 'PA17.png',
            'precio' => '20',
            'author_id' => '1',
            'editorial_id' => '1',
            'category_id' => '1',
            'repository_id' => '2',
        ]);
        DB::table('books')->insert([
            'titulo' => 'Piedra de Agua N° 18',
            'edicion' => 'Primera',
            'numero_paginas' => '32',
            'fecha_publicacion' => '2016/12/01',
            'idioma' => 'español',
            'resumen' => 'Vivimos tiempos de cambio y las instituciones
            del Estado debemos estar a la altura que las circunstancias
            históricas exigen, con mayor razón si se trata de una entidad
            como la Fundación Cultural del
            Banco Central de Bolivia que promueve la interacción de la sociedad,
            desarrollando medios que posibilitan la participación y el acceso de la
            comunidad a las expresiones culturales, artísticas y científicas
            en cada uno de los Centros Culturales a su cargo.
            A través de los diferentes programas que desarrollan
            nuestros Centros Culturales se hace posible el rescate y registro
            del patrimonio nacional, la difusión especializada de la
            herencia histórica, cultural y documental; la apertura a las diferentes
            manifestaciones artísticas y de encuentro, creando y
            ampliando los espacios posibles y, también, lo supuestamente
            imposible; así como la promoción a un mayor acceso de la
            población a nuestros repositorios a través de sus exposiciones
            itinerantes y de sus diferentes programas de difusión que
            llevan el museo más allá de su espacio físico',
            'imagen' => 'PA18.png',
            'precio' => '20',
            'author_id' => '1',
            'editorial_id' => '1',
            'category_id' => '1',
            'repository_id' => '2',
        ]);
    }
}
