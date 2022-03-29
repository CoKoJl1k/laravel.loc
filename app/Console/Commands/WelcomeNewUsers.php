<?php

namespace App\Console\Commands;

use App\Models\Posts;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Throwable;

class WelcomeNewUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:newusers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        //Log::info ('Generated reports reports reports.');
        return 0;
    }
}
