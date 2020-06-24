<?php

use App\IdentifiedChallenge;
use Illuminate\Database\Seeder;

class IdentifiedChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(IdentifiedChallenge::class,5)->create();
    }
}
