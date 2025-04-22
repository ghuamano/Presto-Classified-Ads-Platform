<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class RejectUserRevisor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:reject-user-revisor {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Non rende un utente revisore';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::where('email', $this->argument('email'))->first();
        if (!$user) {
            $this->error('Utente non trovato');
            return;
        }
        $user->is_revisor = false;
        $user->save();
        $this->info("L'utente {$user->name} non è diventato revisore");
    }
}
