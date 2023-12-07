<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class printEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'print:email {email} {--M|Mail}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command Will Print The Email';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $arguments = $this->arguments();
        $email = $this->argument('email');
        $option = $this->option('Mail');
        $options = $this->options();
        $name = $this->ask('What is your name?');
        $secretName = $this->secret('What is your name?');
        $confirm = $this->confirm('Do You Like Bananas :) ?', true);
        $this->info('Print Email Command Is Working Successfully ');
    }
}
