<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call('TipoPersonaSeeder');
       $this->call('PersonaSeeder');
       $this->call('EstadoElementos');
       $this->call('LaboratorioSeeder');
       $this->call('ElementoSeeder');
       $this->call('EstadoSolicitudSeeder');
       $this->call('SolicitudElementoSeeder');
       $this->call('SolicitudLaboratorioSeeder');
       $this->call('SolicitudPromediaSeeder');
       $this->call('AdminSeeder');




    }
}
