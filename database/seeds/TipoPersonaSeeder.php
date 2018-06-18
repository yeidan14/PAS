<?php

use Illuminate\Database\Seeder;
use App\tipo_persona;

class TipoPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(tipo_persona::class,2)->create();
    }
}

