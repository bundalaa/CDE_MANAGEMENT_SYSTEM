<?php

use App\Challenge;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('challenges')->insert([
            'name' => 'Water Management',
            'description' => 'Problem in water supply,production and quality',
        ]);
    }
}
