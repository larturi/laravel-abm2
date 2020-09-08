<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Role::truncate();
        DB::table('assigned_roles')->truncate();

        $user = User::create([
            'name'       => "Usuario 1",
            'email'      => "usuario1@email.com",
            'password'   => "123",
        ]);

        $role = Role::create([
            'name'           => "admin",
            'display_name'   => "Administrador",
            'description'    => "Administrador del sitio",
        ]);

        $user->roles()->save($role);

    }
}
