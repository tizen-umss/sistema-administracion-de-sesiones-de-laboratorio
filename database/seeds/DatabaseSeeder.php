<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionSeed::class);
        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);
        $this->call(LaboratorioSeed::class);
        $this->call(MateriaSeed::class);
        $this->call(GrupoLaboratorioSeed::class);
        $this->call(GrupoMateriaSeed::class);
        $this->call(AsignacionSeed::class);
        $this->call(PortafolioSeed::class);
        $this->call(TareaSeed::class);
        $this->call(ActividadSeed::class);
        $this->call(PostsTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        
    }
}
