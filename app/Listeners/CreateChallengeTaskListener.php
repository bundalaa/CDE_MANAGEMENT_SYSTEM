<?php

namespace App\Listeners;

use App\Events\ChallengeCreatedEvent;
use App\Task;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateChallengeTaskListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ChallengeCreatedEvent  $event
     * @return void
     */
    public function handle(ChallengeCreatedEvent $event)
    {
    Task::create([
        'name'=>'Gather Requirement',
        'identified_challenge_id'=>$event->challenge->id,
        'status_id'=>'1'
    ]);
    Task::create([
        'name'=>'UI Design',
        'identified_challenge_id'=>$event->challenge->id,
        'status_id'=>'1'
    ]);
    Task::create([
        'name'=>'Implementation',
        'identified_challenge_id'=>$event->challenge->id,
        'status_id'=>'1'
    ]);
    Task::create([
        'name'=>'System Testing',
        'identified_challenge_id'=>$event->challenge->id,
        'status_id'=>'1'
    ]);
    Task::create([
        'name'=>'First Version',
        'identified_challenge_id'=>$event->challenge->id,
        'status_id'=>'1'
    ]);
    Task::create([
        'name'=>'Final Version',
        'identified_challenge_id'=>$event->challenge->id,
        'status_id'=>'1'
    ]);
    }
}
