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
            'name' => 'carlos',
            'apellidoPaterno' => 'huarachi',
            'apellidoMaterno' => 'lopez',
            'cedula' => '7095167',
            'codigoSiss' => '201300964',
            'email' => 'admin@admin.com',
            'password' => bcrypt('holamundo')
        ]);
        $user->assignRole('administrator');

        $user = User::create([
            'name' => 'maria',
            'apellidoPaterno' => 'merlo',
            'apellidoMaterno' => 'Mamani',
            'cedula' => '7095167',
            'codigoSiss' => '201300964',
            'email' => 'docente@docente.com',
            'password' => bcrypt('holamundo')
        ]);
        $user->assignRole('docente');

        $user = User::create([
            'name' => 'carolina',
            'apellidoPaterno' => 'gomez',
            'apellidoMaterno' => 'suares',
            'cedula' => '7095167',
            'codigoSiss' => '201300964',
            'email' => 'auxiliar@auxiliar.com',
            'password' => bcrypt('holamundo')
        ]);
        $user->assignRole('auxiliar');

        $user = User::create([
            'name' => 'mario',
            'apellidoPaterno' => 'soliz',
            'apellidoMaterno' => 'Mamani',
            'cedula' => '7095167',
            'codigoSiss' => '201300964',
            'email' => 'estudiante@estudiante.com',
            'password' => bcrypt('holamundo')
        ]);
        $user->assignRole('estudiante');

        $user = User::create([
            'name' => 'sandra',
            'apellidoPaterno' => 'carina',
            'apellidoMaterno' => 'ramos',
            'cedula' => '7095167',
            'codigoSiss' => '201300964',
            'email' => 'estudiante@estudiante.com',
            'password' => bcrypt('holamundo')
        ]);
        $user->assignRole('estudiante');

        $user = User::create([
            'name' => 'luis',
            'apellidoPaterno' => 'caisa',
            'apellidoMaterno' => 'merlo',
            'cedula' => '7095167',
            'codigoSiss' => '201300964',
            'email' => 'estudiante@estudiante.com',
            'password' => bcrypt('holamundo')
        ]);
        $user->assignRole('estudiante');

    }
}
