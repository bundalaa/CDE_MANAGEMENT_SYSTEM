<?php

use App\ChallengeOwner;
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
        $challengeOwnerRole = Role::where('name' , 'challengeOwner')->first();

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
        $student = User::create([
            'name'=>'Khadija Hussein',
            'email'=>'khadija@gmail.com',
            'password' => ('12345678'),
        ]);
         Student::create([
            'user_id'=>$student->id
            ]);
        $student->roles()->attach($studentRole);
        $student = User::create([
            'name'=>'Haji mlipoteo',
            'email'=>'haji@gmail.com',
            'password' => ('12345678'),
        ]);
         Student::create([
            'user_id'=>$student->id
            ]);
        $student->roles()->attach($studentRole);
        $student = User::create([
            'name'=>'Neema mwaipopo',
            'email'=>'neema@gmail.com',
            'password' => ('12345678'),
        ]);
         Student::create([
            'user_id'=>$student->id
            ]);
        $student->roles()->attach($studentRole);
        $student = User::create([
            'name'=>'Cleopatra kileo',
            'email'=>'cleopatra@gmail.com',
            'password' => ('12345678'),
        ]);
         Student::create([
            'user_id'=>$student->id
            ]);
        $student->roles()->attach($studentRole);
        // $student->student()->save($student);

        $supervisor = User::create([
            'name'=>'Miss. Rahma',
            'email'=>'supervisor@gmail.com',
            'password' => ('12345678'),
        ]);
        Supervisor::create([
            'user_id'=>$supervisor->id
            ]);
        $supervisor->roles()->attach($supervisorRole);
        $supervisor = User::create([
            'name'=>'Miss. Maimuna',
            'email'=>'maimuna@gmail.com',
            'password' => ('12345678'),
        ]);
        Supervisor::create([
            'user_id'=>$supervisor->id
            ]);
        $supervisor->roles()->attach($supervisorRole);
        $supervisor = User::create([
            'name'=>'Miss. Nawal',
            'email'=>'nawal@gmail.com',
            'password' => ('12345678'),
        ]);
        Supervisor::create([
            'user_id'=>$supervisor->id
            ]);
        $supervisor->roles()->attach($supervisorRole);
        $supervisor = User::create([
            'name'=>'Mr. Waziri',
            'email'=>'waziri@gmail.com',
            'password' => ('12345678'),
        ]);
        Supervisor::create([
            'user_id'=>$supervisor->id
            ]);
        $supervisor->roles()->attach($supervisorRole);
        $supervisor = User::create([
            'name'=>'Miss. Pudensiana',
            'email'=>'pudensiana@gmail.com',
            'password' => ('12345678'),
        ]);
        Supervisor::create([
            'user_id'=>$supervisor->id
            ]);
        $supervisor->roles()->attach($supervisorRole);
        $supervisor = User::create([
            'name'=>'Mr. Michael',
            'email'=>'michael@gmail.com',
            'password' => ('12345678'),
        ]);
        Supervisor::create([
            'user_id'=>$supervisor->id
            ]);
        $supervisor->roles()->attach($supervisorRole);

        $challengeOwner = User::create([
            'name'=>'DAWASA comp',
            'email'=>'challengeOwner@gmail.com',
            'password' => ('12345678'),
        ]);
        ChallengeOwner::create([
            'user_id'=>$challengeOwner->id
            ]);
        $challengeOwner->roles()->attach($challengeOwnerRole);
        $challengeOwner = User::create([
            'name'=>'Ewura comp',
            'email'=>'ewura@gmail.com',
            'password' => ('12345678'),
        ]);
        ChallengeOwner::create([
            'user_id'=>$challengeOwner->id
            ]);
        $challengeOwner->roles()->attach($challengeOwnerRole);
        $challengeOwner = User::create([
            'name'=>'Rita',
            'email'=>'rita@gmail.com',
            'password' => ('12345678'),
        ]);
        ChallengeOwner::create([
            'user_id'=>$challengeOwner->id
            ]);
        $challengeOwner->roles()->attach($challengeOwnerRole);
        $challengeOwner = User::create([
            'name'=>'Tanesco comp',
            'email'=>'tanesco@gmail.com',
            'password' => ('12345678'),
        ]);
        ChallengeOwner::create([
            'user_id'=>$challengeOwner->id
            ]);
        $challengeOwner->roles()->attach($challengeOwnerRole);
    }
}
