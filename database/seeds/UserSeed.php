<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'id'=>'0',
            'name' => 'Admin',
            'apellidoPaterno' => 'huarachi',
            'apellidoMaterno' => 'Mamani',
            'cedula' => '7095167',
            'codigoSiss' => '201300964',
            'email' => 'admin@admin.com',
            'password' => bcrypt('holamundo')
        ]);
        $user->assignRole('administrator');

        $user = User::create([
            'name' => 'Docente',
            'apellidoPaterno' => 'huarachi',
            'apellidoMaterno' => 'Mamani',
            'cedula' => '7095167',
            'codigoSiss' => '201300964',
            'email' => 'docente@adocente.com',
            'password' => bcrypt('holamundo')
        ]);
        $user->assignRole('docente');

        $user = User::create([
            'name' => 'Auxiliar',
            'apellidoPaterno' => 'huarachi',
            'apellidoMaterno' => 'Mamani',
            'cedula' => '7095167',
            'codigoSiss' => '201300964',
            'email' => 'auxiliar@auxiliar.com',
            'password' => bcrypt('holamundo')
        ]);
        $user->assignRole('auxiliar');

        $user = User::create([
            'name' => 'Estudiante',
            'apellidoPaterno' => 'huarachi',
            'apellidoMaterno' => 'Mamani',
            'cedula' => '7095167',
            'codigoSiss' => '201300964',
            'email' => 'estudiante@estudiante.com',
            'password' => bcrypt('holamundo')
        ]);
        $user->assignRole('estudiante');

    }
}
