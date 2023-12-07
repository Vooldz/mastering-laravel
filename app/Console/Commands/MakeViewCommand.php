<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new blade file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Get argument
        $fileName = $this->argument('view');

        // Create full path from your argument
        $path = $this->getFullPath($fileName);

        // Check on folders -> if not exists -> create new folder
        $this->checkFolder($path);

        // Check on blade file -> if exists -> return error -> else -> create your new blade file
        if(File::exists($path)){
            $this->line('');
            $this->error("The file {$path} is already exists!");
            $this->line('');
            return;
        }

        // Creating the file
        File::put($path, "");

        // Output
        $this->line('');
        $this->info(" \e[44;37m INFO \e[0m File [{$path}] Created Successfully.");
        $this->line('');
    }

    /**
     * Get full path.
     */
    public function getFullPath($fileName)
    {

        $view = str_replace('.', '/', $fileName) . ".blade.php";

        $path = "resources/views/{$view}";

        return ($path);

    }

    /**
     * Check folders.
     */

    public function checkFolder($path)
    {
        $directory = dirname($path);
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
    }
}
