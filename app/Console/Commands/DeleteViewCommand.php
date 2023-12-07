<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class DeleteViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:view {view : The name of the view file to delete}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete a view blade file';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $viewName = $this->argument('view');

        $viewPath = resource_path("views/{$viewName}.blade.php");


        if (File::exists($viewPath)) {
            File::delete($viewPath);
            $this->line('');
            $this->info(" \e[44;37m INFO \e[0m View {$viewName} deleted successfully.");
            $this->line('');
        } else {
            $this->line('');
            $this->error("View {$viewName} does not exist.");
            $this->line('');
        }
    }
}
