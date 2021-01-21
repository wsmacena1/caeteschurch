<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::create([
            'id'  => md5(uniqid(rand(), true)),
            'role'    => 'User'       
            ]);
        Roles::create([
            'id'  => md5(uniqid(rand(), true)),
            'role'    => 'Admin'       
            ]);
    }
}
