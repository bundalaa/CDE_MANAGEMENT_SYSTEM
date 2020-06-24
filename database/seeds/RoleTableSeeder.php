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
            'description'=>'mtaalam'
        ]);
         Role::create([
            'name'=> 'student',
            'description'=>'mtaalam'
        ]);
         Role::create([
            'name'=> 'supervisor',
            'description'=>'mtaalam'
        ]);
         Role::create([
            'name'=> 'challengeOwner',
            'description'=>'mtaalam'
        ]);
    }
}
