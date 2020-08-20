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
            'name' => 'Loss of Water',
            'description' => 'Problem of losing a lot of water through supplying and production',
        ]);
    }
}
