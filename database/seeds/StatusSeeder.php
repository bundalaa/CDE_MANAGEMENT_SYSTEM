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
            'value'=>0
        ]);
         Status::create([
            'name'=> 'stage one',
            'value'=>40
        ]);
         Status::create([
            'name'=> 'stage two',
            'value'=>60
        ]);
         Status::create([
            'name'=> 'stage three',
            'value'=>80
        ]);
        Status::create([
            'name'=> 'completed',
            'value'=>100
        ]);
    }
}
