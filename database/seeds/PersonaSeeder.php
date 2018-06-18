<?php

use Illuminate\Database\Seeder;
use App\persona;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(persona::class,6)->create();
    }
}
