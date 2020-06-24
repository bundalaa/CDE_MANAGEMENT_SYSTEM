<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name' , 'admin')->first();
        $studentRole = Role::where('name' , 'student')->first();
        $supervisorRole = Role::where('name' , 'supervisor')->first();
        $challengeOwnerRole = Role::where('name' , 'challengeOwner')->first();

        $admin = User::create([
            'name'=>'admin Eliza',
            'email'=>'admin@admin.com',
            'password' => Hash::make('password123')
        ]);
        $admin->roles()->attach($adminRole);


        $student = User::create([
            'name'=>'student John',
            'email'=>'student@student.com',
            'password' => Hash::make('student@student.com')
        ]);
        $student->roles()->attach($studentRole);

        $supervisor = User::create([
            'name'=>'supervisor Rahma',
            'email'=>'supervisor@supervisor.com',
            'password' => Hash::make('supervisor@supervisor.com')
        ]);


        $supervisor->roles()->attach($supervisorRole);


        $challengeOwner = User::create([
            'name'=>'challengeOwner',
            'email'=>'challengeOwner@c.com',
            'password' => Hash::make('challengeOwner@c.com')
        ]);
        $challengeOwner->roles()->attach($challengeOwnerRole);



    }
}
