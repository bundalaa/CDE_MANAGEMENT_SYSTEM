<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
         $this->call(UserTableSeeder::class);
        //  $this->call(IdentifiedChallengeSeeder::class);
        //  $this->call(CommentSeeder::class);
         //$this->call(AttendanceSeeder::class);
        //  $this->call(StudentSeeder::class);
        //  $this->call(ReportSeeder::class);
        //  $this->call(SupervisorSeeder::class);
        //  $this->call(StudentSeeder::class);
        //  $this->call(TeamSeeder::class);
        //  $this->call(CompanySeeder::class);
        //  $this->call(SuggestionSeeder::class);
        //  $this->call(GoalSeeder::class);
         //$this->call(FeedbackSeeder::class);
         // $this->call('NewsSeeder');
        //  $this->call(ProjectSeeder::class);
         //$this->call(SegmentSeeder::class);
         //$this->call(CoordinatorSeeder::class);
        //  $this->call(ChallengeSeeder::class);
         // $this->call(RoleSeeder::class);
        //$this->call(ScheduleSeeder::class);
    }
}
