<?php

use Illuminate\Database\Seeder;
use App\solicitud_laboratorio;

class SolicitudLaboratorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(solicitud_laboratorio::class,10)->create();
    }
}
