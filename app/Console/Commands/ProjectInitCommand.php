<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ProjectInitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:init';

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
 $string = "
                     _            _ _                  
     /\             (_)          | | |                 
    /  \   __ _ _ __ _  ___ _   _| | |_ _   _ _ __ ___ 
   / /\ \ / _` | '__| |/ __| | | | | __| | | | '__/ _ \
  / ____ \ (_| | |  | | (__| |_| | | |_| |_| | | |  __/
 /_/    \_\__, |_|  |_|\___|\__,_|_|\__|\__,_|_|  \___|
           __/ |                                       
          |___/                                        
";
 $this->info($string);
 Artisan::call('migrate:fresh', array('--seed' => true));
 $this->info(Artisan::output());
 Artisan::call('module:seed');
 $this->info(Artisan::output());
 }
}
