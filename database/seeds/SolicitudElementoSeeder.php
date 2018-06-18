<?php

use Illuminate\Database\Seeder;
use App\solicitud_elemento;

class SolicitudElementoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(solicitud_elemento::class,10)->create();
    }
}
