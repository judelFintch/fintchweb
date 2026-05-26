<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    protected $signature = 'admin:create {email?} {--name=Admin}';

    protected $description = 'Create or update an administrator account for the back-office.';

    public function handle(): int
    {
        $email = $this->argument('email') ?: $this->ask('Email admin');
        $name = (string) $this->option('name');
        $password = $this->secret('Mot de passe admin');

        if (! $email || ! $password) {
            $this->error('Email et mot de passe requis.');

            return self::FAILURE;
        }

        $user = User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => Hash::make($password),
            ]
        );

        $this->info('Compte admin pret: '.$user->email);

        return self::SUCCESS;
    }
}
