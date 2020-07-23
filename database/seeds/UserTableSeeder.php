<?php

use App\Coordinator;
use App\Role;
use App\Student;
use App\Supervisor;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        // $challengeOwnerRole = Role::where('name' , 'challengeOwner')->first();

        $admin = User::create([
            'name'=>'Elizabeth',
            'email'=>'admin@gmail.com',
            'password' => ('12345678'),
        ]);
        $admin->roles()->attach($adminRole);
        Coordinator::create([
            'user_id'=>$admin->id
            ]);

        $student = User::create([
            'name'=>'John Mdoe',
            'email'=>'student@gmail.com',
            'password' => ('12345678'),
        ]);
         Student::create([
            'user_id'=>$student->id
            ]);
        $student->roles()->attach($studentRole);
        // $student->student()->save($student);

        $supervisor = User::create([
            'name'=>'miss Rahma',
            'email'=>'supervisor@gmail.com',
            'password' => ('12345678'),
        ]);
        Supervisor::create([
            'user_id'=>$supervisor->id
            ]);
        $supervisor->roles()->attach($supervisorRole);


        // $challengeOwner = User::create([
        //     'name'=>'DAWASA comp',
        //     'email'=>'challengeOwner@gmail.com',
        //     'password' => ('12345678'),
        //     'role_id' =>4
        // ]);
        // $challengeOwner->roles()->attach($challengeOwnerRole);
    }
}
