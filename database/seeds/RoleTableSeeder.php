<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        Role::create([
            'name'=> 'admin',
            'description'=>'coordinator',
            'permission' =>''
        ]);
         Role::create([
            'name'=> 'student',
            'description'=>'student',
            'permission' =>''
        ]);
         Role::create([
            'name'=> 'supervisor',
            'description'=>'supervisor',
            'permission' =>''
        ]);
         Role::create([
            'name'=> 'challengeOwner',
            'description'=>'challenge owner',
            'permission' =>''
        ]);
    }
}
