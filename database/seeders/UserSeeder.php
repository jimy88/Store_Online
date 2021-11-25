<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role = Role::create(['name' => 'admin']);

        User::create([
            'name' => 'Administrador de prueba',
            'email' => 'admin@prueba.com',
            'password' => bcrypt('87654321')
        ])->assignRole('admin');


        User::factory(10)->create();
    }
}
