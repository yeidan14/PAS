<?php

use Illuminate\Database\Seeder;
use App\solicitud_promedia;

class SolicitudPromediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(solicitud_promedia::class,10)->create();
    }
}
