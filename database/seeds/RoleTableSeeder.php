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
        ]);
         Role::create([
            'name'=> 'student',
            'description'=>'student',
        ]);
         Role::create([
            'name'=> 'supervisor',
            'description'=>'supervisor',
        ]);
         Role::create([
            'name'=> 'challengeOwner',
            'description'=>'challenge owner',
        ]);
    }
}
