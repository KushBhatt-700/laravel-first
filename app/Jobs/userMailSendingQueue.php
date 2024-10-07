<?php

namespace App\Jobs;

use Event;
use Log;
use App\Events\userMailSend;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class userMailSendingQueue implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $queueData;
    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
        $this->queueData = $data;
    }
    
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Event::dispatch(new userMailSend($this->queueData));
    }
}
