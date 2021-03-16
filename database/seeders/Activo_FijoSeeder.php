<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Activo_Fijo;
class Activo_FijoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activo_Fijo::create(['nombre'=>'laptop hp id123',
            'fecha_obtencion'=>Carbon::create(2011,12,10),
            'valor_compra'=>2160,
            'categoria_id'=>1,
            'departamento_id'=>2,
            'estado_id'=>1,
            'almacen_id'=>2
        ]);

        Activo_Fijo::create(['nombre'=>'televisor 43 id123',
            'fecha_obtencion'=>Carbon::create(2014,01,30),
            'valor_compra'=>2320,
            'estado_id'=>1,
            'categoria_id'=>4,
            'departamento_id'=>1,
            'almacen_id'=>1
        ]);

        Activo_Fijo::create(['nombre'=>'automovil de 2009 toyota',
            'fecha_obtencion'=>Carbon::create(2018,05,17),
            'valor_compra'=>32160,
            'estado_id'=>1,
            'categoria_id'=>6,
            'departamento_id'=>1,
            'almacen_id'=>2
        ]);

        Activo_Fijo::create(['nombre'=>'volvo del 2017 con suspecnvion alta',
            'fecha_obtencion'=>Carbon::create(2014,03,10),
            'valor_compra'=>90060,
            'estado_id'=>1,
            'categoria_id'=>6,
            'departamento_id'=>2,
            'almacen_id'=>2
        ]);

        Activo_Fijo::create(['nombre'=>'escritorio de metal',
            'fecha_obtencion'=>Carbon::create(2011,07,16),
            'valor_compra'=>7560,
            'estado_id'=>1,
            'categoria_id'=>2,
            'departamento_id'=>3,
            'almacen_id'=>2
        ]);

    }
}
