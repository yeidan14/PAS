<?php

use Illuminate\Database\Seeder;
use App\laboratorio;

class LaboratorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(laboratorio::class,4)->create();
    }
}
