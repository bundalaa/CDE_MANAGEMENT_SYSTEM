<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::truncate();
        Status::create([
            'name'=> 'pending',
        ]);
         Status::create([
            'name'=> 'stage-one',
        ]);
         Status::create([
            'name'=> 'stage-two',
        ]);
         Status::create([
            'name'=> 'stage-three',
        ]);
        Status::create([
            'name'=> 'completed',
        ]);
    }
}
