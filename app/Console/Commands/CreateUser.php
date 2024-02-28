<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'task-manager:create-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user with the given email and password';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('name');
        $email = $this->ask('email');
        $password = $this->secret('password');

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
        ]);


        $this->info("User '{$name}' created successfully with email '{$email}'.");

        return 0;
    }
}
