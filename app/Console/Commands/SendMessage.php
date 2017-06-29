<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\MessagePosted;

class SendMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'message:send {msg}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'SendMessage';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        echo "okiee";
        event(new MessagePosted([1,2,3,4]));
    }
}
