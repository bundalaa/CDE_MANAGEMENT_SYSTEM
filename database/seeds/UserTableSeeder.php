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
            'name'=>'admin Elizabeth',
            'email'=>'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' =>1
        ]);
        $admin->roles()->attach($adminRole);


        $student = User::create([
            'name'=>'John Mdoe',
            'email'=>'student@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' =>2
        ]);
        $student->roles()->attach($studentRole);

        $supervisor = User::create([
            'name'=>'miss Rahma',
            'email'=>'supervisor@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' =>3
        ]);


        $supervisor->roles()->attach($supervisorRole);


        $challengeOwner = User::create([
            'name'=>'DAWASA comp',
            'email'=>'challengeOwner@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' =>4
        ]);
        $challengeOwner->roles()->attach($challengeOwnerRole);
    }
}
