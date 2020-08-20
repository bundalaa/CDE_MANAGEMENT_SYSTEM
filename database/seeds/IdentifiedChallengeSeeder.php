<?php

use App\Events\ChallengeCreatedEvent;
use App\IdentifiedChallenge;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdentifiedChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $identifiedChallenge= DB::table('identified_challenges')->insert([
            'challenge_id' =>'1',
            'name' => 'Billing system',
            'description' => 'Help to capture true value of using water by a specific customer',
            'status'=>'0'
        ]);
        event(new ChallengeCreatedEvent($identifiedChallenge));

        // DB::table('identified_challenges')->insert([
        //     'challenge_id' =>'1',
        //     'name' => 'Billing System',
        //     'description' => 'Problem in billing',
        //     'status'=>'0'
        // ]);
        // DB::table('identified_challenges')->insert([
        //     'challenge_id' =>'1',
        //     'name' => 'Water quality',
        //     'description' => 'Problem in quality of water',
        //     'status'=>'0'
        // ]);
        // DB::table('identified_challenges')->insert([
        //     'challenge_id' =>'1',
        //     'name' => 'Consultation App',
        //     'description' => 'No area for user to make contribution for us',
        //     'status'=>'0'
        // ]);
    }
}
