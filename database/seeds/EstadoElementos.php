<?php

use Illuminate\Database\Seeder;
use App\estado_elemento;

class EstadoElementos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          factory(estado_elemento::class,3)->create();
    }
}
