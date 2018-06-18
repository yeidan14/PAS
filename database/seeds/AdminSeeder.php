<?php

use Illuminate\Database\Seeder;
use App\admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(admin::class,2)->create();
    }
}
