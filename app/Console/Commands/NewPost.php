<?php

namespace App\Console\Commands;

use App\Models\Posts;
use Illuminate\Console\Command;
use Throwable;

class NewPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:newpost';

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
        try {
            Posts::create( [
                'title' => 'field title',
                //'title' => null,
                'post' => 'field post',
            ]);
            $this->line("success");
            $email = $this->ask('What is your email address   Y/N?');
            $this->line($email);

            $this->output->progressAdvance();

            if ($email === 'Y') {
                $this->line("success");
            } else {
                $this->line("fail");
            }

            if($this->confirm("Do you confirm password?") ){
                $this->info('Your command has run successfully. ');
            };

            $headers = [ 'title' , 'post' ] ;
            $data = Posts::all([ 'title', 'post' ])->toArray();
            $this->table($headers, $data);

            $totalUnits = 10;
            $this->output->progressStart($totalUnits);
            for ($i = 0; $i < $totalUnits; $i++) {
                sleep(1);
                $this->output->progressAdvance();
            }
            $this->output->progressFinish();

        }  catch (Throwable $exception) {
            report($exception);
            $this->error($exception->getMessage());
        }

    }
}
