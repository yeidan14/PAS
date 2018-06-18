<?php

use Illuminate\Database\Seeder;
use App\elemento;

class ElementoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(elemento::class,10)->create();
    }
}
