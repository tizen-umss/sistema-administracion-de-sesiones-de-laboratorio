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
            'apellidopaterno' => 'huarachi',
            'apellidomaterno' => 'lopez',
            'cedula' => '7095167',
            'codigosiss' => '201300964',
            'email' => 'admin@admin.com',
            'password' => bcrypt('holamundo')
        ]);
        $user->assignRole('administrator');

        $user = User::create([
            'name' => 'maria',
            'apellidopaterno' => 'merlo',
            'apellidomaterno' => 'Mamani',
            'cedula' => '7095167',
            'codigosiss' => '201300964',
            'email' => 'docente@docente.com',
            'password' => bcrypt('holamundo')
        ]);
        $user->assignRole('docente');

        $user = User::create([
            'name' => 'carolina',
            'apellidopaterno' => 'gomez',
            'apellidomaterno' => 'suares',
            'cedula' => '7095167',
            'codigosiss' => '201300964',
            'email' => 'auxiliar@auxiliar.com',
            'password' => bcrypt('holamundo')
        ]);
        $user->assignRole('auxiliar');

        $user = User::create([
            'name' => 'mario',
            'apellidopaterno' => 'soliz',
            'apellidomaterno' => 'Mamani',
            'cedula' => '7095167',
            'codigosiss' => '201300964',
            'email' => 'estudiante@estudiante.com',
            'password' => bcrypt('holamundo')
        ]);
        $user->assignRole('estudiante');

        $user = User::create([
            'name' => 'sandra',
            'apellidopaterno' => 'carina',
            'apellidomaterno' => 'ramos',
            'cedula' => '7095167',
            'codigosiss' => '201300964',
            'email' => 'estudiante@estudiante.com',
            'password' => bcrypt('holamundo')
        ]);
        $user->assignRole('estudiante');

        $user = User::create([
            'name' => 'luis',
            'apellidopaterno' => 'caisa',
            'apellidomaterno' => 'merlo',
            'cedula' => '7095167',
            'codigosiss' => '201300964',
            'email' => 'estudiante@estudiante.com',
            'password' => bcrypt('holamundo')
        ]);
        $user->assignRole('estudiante');

    }
}
