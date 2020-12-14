<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class BaseDatosPoetsCircle extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Tabla Clientes
        DB::table('clientes')->insert([
            'Nombre' => 'Carlos',
            'Apellido' => 'Álvarez',
            'Telefono' => 6253267815
        ]);
        DB::table('clientes')->insert([
            'Nombre' => 'Beatriz',
            'Apellido' => 'López',
            'Telefono' => 9648251364
        ]);
        DB::table('clientes')->insert([
            'Nombre' => 'Manuel',
            'Apellido' => 'Escalante',
            'Telefono' => 6275931685
        ]);
        DB::table('clientes')->insert([
            'Nombre' => 'Holga',
            'Apellido' => 'Cordero',
            'Telefono' => 6145932671
        ]);
        DB::table('clientes')->insert([
            'Nombre' => 'David',
            'Apellido' => 'Flores',
            'Telefono' => 6354821697
        ]);

//        Tabla Poemas
        DB::table('poemas')->insert([
            'Titulo' => 'Poema 12',
            'idPoeta' => 1
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Soneto 22',
            'idPoeta' => 1
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Poema 1',
            'idPoeta' => 1
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Si tú me olvidas',
            'idPoeta' => 1
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Amor',
            'idPoeta' => 1
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Hagamos un trato',
            'idPoeta' => 2
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Semántica práctica',
            'idPoeta' => 2
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Estados de ánimo',
            'idPoeta' => 2
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Cuando éramos niños',
            'idPoeta' => 2
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Hombre que mira a su país desde el exilio',
            'idPoeta' => 2
        ]);
        DB::table('poemas')->insert([
            'Titulo' => '¡Oh Mi Adorada Niña!',
            'idPoeta' => 3
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Tú Eres Mío, Tú Eres Mía',
            'idPoeta' => 3
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Cómo Decía Usted, Amigo Mío',
            'idPoeta' => 3
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Triste, muy tristemente',
            'idPoeta' => 3
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Mía',
            'idPoeta' => 3
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Soneto III',
            'idPoeta' => 4
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Niña',
            'idPoeta' => 4
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Epitafio de un poeta',
            'idPoeta' => 4
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Las palabras',
            'idPoeta' => 4
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Tus ojos',
            'idPoeta' => 4
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Madrigal',
            'idPoeta' => 5
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'El primer beso',
            'idPoeta' => 5
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Escamoteo',
            'idPoeta' => 5
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Autobiografía',
            'idPoeta' => 5
        ]);
        DB::table('poemas')->insert([
            'Titulo' => 'Cobardía',
            'idPoeta' => 5
        ]);

//        poemaspublicaciones
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 1,
            'idPublicacion' => 1
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 2,
            'idPublicacion' => 1
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 3,
            'idPublicacion' => 1
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 4,
            'idPublicacion' => 1
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 5,
            'idPublicacion' => 1
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 6,
            'idPublicacion' => 2
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 7,
            'idPublicacion' => 2
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 8,
            'idPublicacion' => 2
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 9,
            'idPublicacion' => 2
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 10,
            'idPublicacion' => 2
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 11,
            'idPublicacion' => 3
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 12,
            'idPublicacion' => 3
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 13,
            'idPublicacion' => 3
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 14,
            'idPublicacion' => 3
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 15,
            'idPublicacion' => 3
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 16,
            'idPublicacion' => 4
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 17,
            'idPublicacion' => 4
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 18,
            'idPublicacion' => 4
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 19,
            'idPublicacion' => 4
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 20,
            'idPublicacion' => 4
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 21,
            'idPublicacion' => 5
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 22,
            'idPublicacion' => 5
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 23,
            'idPublicacion' => 5
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 24,
            'idPublicacion' => 5
        ]);
        DB::table('poemaspublicaciones')->insert([
            'idPoema' => 1,
            'idPublicacion' => 5
        ]);

//        Tabla Poetas
        DB::table('Poetas')->insert([
            'Nombre' => 'Pablo',
            'Apellido' => 'Neruda',
        ]);
        DB::table('Poetas')->insert([
            'Nombre' => 'Mario',
            'Apellido' => 'Benedetti',
        ]);
        DB::table('Poetas')->insert([
            'Nombre' => 'Ruben',
            'Apellido' => 'Dario',
        ]);
        DB::table('Poetas')->insert([
            'Nombre' => 'Octavio',
            'Apellido' => 'Paz',
        ]);
        DB::table('Poetas')->insert([
            'Nombre' => 'Amado',
            'Apellido' => 'Nervo',
        ]);

//        Tabla Publicaciones
        DB::table('Publicaciones')->insert([
            'Titulo' => 'Colección Amado Nervo',
            'Precio' => '50.50',
        ]);
        DB::table('Publicaciones')->insert([
            'Titulo' => 'Coleccion Mario Benedetti',
            'Precio' => '65.20',
        ]);
        DB::table('Publicaciones')->insert([
            'Titulo' => 'Colección Rúben Darío',
            'Precio' => '70.00',
        ]);
        DB::table('Publicaciones')->insert([
            'Titulo' => 'Colección Octavio Paz',
            'Precio' => '45.80',
        ]);
        DB::table('Publicaciones')->insert([
            'Titulo' => 'Colección Amado Nervo',
            'Precio' => '60.00',
        ]);

//       Tabla Ventas
        DB::table('Ventas')->insert([
            'Fecha' => '2020-10-03',
            'Monto' => 51,
            'idCliente' => 1
        ]);
        DB::table('Ventas')->insert([
            'Fecha' => '2020-08-10',
            'Monto' => 62,
            'idCliente' => 2
        ]);
        DB::table('Ventas')->insert([
            'Fecha' => '2020-11-06',
            'Monto' => 70,
            'idCliente' => 3
        ]);
        DB::table('Ventas')->insert([
            'Fecha' => '2020-07-25',
            'Monto' => 46,
            'idCliente' => 4
        ]);
        DB::table('Ventas')->insert([
            'Fecha' => '2020-07-05',
            'Monto' => 60,
            'idCliente' => 5
        ]);
        DB::table('Ventas')->insert([
            'Fecha' => '2020-10-25',
            'Monto' => 451,
            'idCliente' => 1
        ]);
        DB::table('Ventas')->insert([
            'Fecha' => '2020-08-26',
            'Monto' => 78,
            'idCliente' => 5
        ]);

//        Tabla ventaspublicaciones
        DB::table('ventaspublicaciones')->insert([
            'idVenta' => 1,
            'idPublicacion' => 1
        ]);
        DB::table('ventaspublicaciones')->insert([
            'idVenta' => 2,
            'idPublicacion' => 2
        ]);
        DB::table('ventaspublicaciones')->insert([
            'idVenta' => 3,
            'idPublicacion' => 3
        ]);
        DB::table('ventaspublicaciones')->insert([
            'idVenta' => 4,
            'idPublicacion' => 4
        ]);
        DB::table('ventaspublicaciones')->insert([
            'idVenta' => 5,
            'idPublicacion' => 5
        ]);
        DB::table('ventaspublicaciones')->insert([
            'idVenta' => 6,
            'idPublicacion' => 1
        ]);
        DB::table('ventaspublicaciones')->insert([
            'idVenta' => 7,
            'idPublicacion' => 4
        ]);
    }
}
