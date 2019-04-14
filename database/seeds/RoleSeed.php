<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo('users_manage');

        $role1 = Role::create(['name' => 'docente']);
        $role1->givePermissionTo('calificacion');

        $role2 = Role::create(['name' => 'auxiliar']);
        $role2->givePermissionTo('registrar_actividades');

        $role3 = Role::create(['name' => 'estudiante']);
        $role3->givePermissionTo('subir_tareas');


    }
}
