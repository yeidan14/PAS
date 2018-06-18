<?php

use Illuminate\Database\Seeder;
use App\estado_solicitud;

class EstadoSolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(estado_solicitud::class,3)->create();
    }
}
