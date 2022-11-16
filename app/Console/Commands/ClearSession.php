<?php

namespace App\Console\Commands;

use App\Bll\Constants;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Session;

class ClearSession extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'session:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear Session';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Session::forget([Constants::Settings, Constants::AdminLang, Constants::Lang]);

        $this->info('Session cleared successfully');

        return Command::SUCCESS;
    }
}
