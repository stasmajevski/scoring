<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class ShowScoring extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scoring:show {userId?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show users scoring';

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
        $userId = $this->argument('userId');

        $headers = ['User ID', 'Total Scoring', 'Phone', 'E-mail', 'Education', 'Terms'];

        $users = User::when($userId, function ($query) use ($userId) {
                $query->whereId($userId);
            })
            ->get(['id', 'education_id', 'email', 'terms', 'phone', 'scoring'])
            ->makeHidden(['education_id', 'email', 'terms', 'phone'])
            ->toArray();

        $this->table($headers, $users);
    }
}
