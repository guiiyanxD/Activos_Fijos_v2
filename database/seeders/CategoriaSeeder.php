<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
        {
            //Categoria::factory(30)->create();
            Categoria::create([
                'nombre'=>'laptops',
            'descripcion'=>'computadoras portatiles para uso de oficina',
            'depreciar'=>1, 'actualiza'=>1,
            'rubro_id'=>14]);

            Categoria::create(['nombre'=>'escritorios',
            'descripcion'=>'escritorios de diferentes tamaños para uso de oficina',
            'depreciar'=>1, 'actualiza'=>1,
            'rubro_id'=>2]);

            Categoria::create(['nombre'=>'vitrinas',
            'descripcion'=>'vitrinas para uso de oficina',
            'depreciar'=>1, 'actualiza'=>1,
            'rubro_id'=>2]);

            Categoria::create(['nombre'=>'pantallas tv',
            'descripcion'=>'pantallas para uso de oficina',
            'depreciar'=>1, 'actualiza'=>1,
            'rubro_id'=>14]);

            Categoria::create(['nombre'=>'vehiculos',
            'descripcion'=>'vehiculos para el transporte de personal',
            'depreciar'=>1, 'actualiza'=>1,
            'rubro_id'=>6]);

            Categoria::create(['nombre'=>'camiones',
            'descripcion'=>'camiones pequeños para transportar maquinaria o muebles',
            'depreciar'=>1, 'actualiza'=>1,
            'rubro_id'=>6]);

            Categoria::create(['nombre'=>'destornilladores',
            'descripcion'=>'herramienta pequeña para poder sacer un tornillo de una pared u objeto',
            'depreciar'=>0, 'actualiza'=>0,
            'rubro_id'=>12]);

            Categoria::create(['nombre'=>'cpu',
            'descripcion'=>'computadoras de escritorio para uso de oficina',
            'depreciar'=>1, 'actualiza'=>1,
            'rubro_id'=>14]);

            Categoria::create(['nombre'=>'red de conexcion de internet',
            'descripcion'=>'red para proveer de internet a un establecimiento',
            'depreciar'=>1, 'actualiza'=>1,
            'rubro_id'=>4]);

            Categoria::create(['nombre'=>'sillones ',
            'descripcion'=>'sillones para poder tener un lugar para que las personas descancen',
            'depreciar'=>1, 'actualiza'=>1,
            'rubro_id'=>2]);
        }
    }

