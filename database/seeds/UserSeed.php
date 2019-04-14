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
            'name' => 'Admin',
            'apellidoPaterno' => 'huarachi',
            'apellidoMaterno' => 'Mamani',
            'cedula' => '7095167',
            'codigoSiss' => '201300964',
            'email' => 'admin@admin.com',
            'password' => bcrypt('holamundo')
        ]);
        $user->assignRole('administrator');

        $user1 = User::create([
            'name' => 'Docente',
            'apellidoPaterno' => 'huarachi',
            'apellidoMaterno' => 'Mamani',
            'cedula' => '7095167',
            'codigoSiss' => '201300964',
            'email' => 'docente@adocente.com',
            'password' => bcrypt('holamundo')
        ]);
        $user1->assignRole('docente');

        $user2 = User::create([
            'name' => 'Auxiliar',
            'apellidoPaterno' => 'huarachi',
            'apellidoMaterno' => 'Mamani',
            'cedula' => '7095167',
            'codigoSiss' => '201300964',
            'email' => 'auxiliar@auxiliar.com',
            'password' => bcrypt('holamundo')
        ]);
        $user2->assignRole('auxiliar');

        $user3 = User::create([
            'name' => 'Estudiante',
            'apellidoPaterno' => 'huarachi',
            'apellidoMaterno' => 'Mamani',
            'cedula' => '7095167',
            'codigoSiss' => '201300964',
            'email' => 'estudiante@estudiante.com',
            'password' => bcrypt('holamundo')
        ]);
        $user3->assignRole('estudiante');

    }
}
