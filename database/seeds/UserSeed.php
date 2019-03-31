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
            'codigoSiss' => '201200215152',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);
        $user->assignRole('administrator');

    }
}
