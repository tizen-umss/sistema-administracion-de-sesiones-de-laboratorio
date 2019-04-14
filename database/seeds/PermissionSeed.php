<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('cache:clear');
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        
        Permission::create(['name' => 'users_manage']);

        Permission::create(['name' => 'calificacion']);
        Permission::create(['name' => 'registrar_actividades']);
        Permission::create(['name' => 'presentar_tareas']);
        Permission::create(['name' => 'subir_tareas']);
    }
}
