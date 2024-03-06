<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

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
	 * Execute the console command.gu
	 */
	public function handle(): void
	{
		$name = $this->ask('name');
		$email = $this->ask('email');
		$password = $this->secret('password');

		$validator = Validator::make([
			'name'     => $name,
			'email'    => $email,
			'password' => $password,
		], [
			'name'     => ['required', 'min:1'],
			'email'    => ['required', 'email', 'unique:users,email'],
			'password' => ['required', 'min:4'],
		]);

		User::create($validator->validated());

		$this->info("User '{$name}' created successfully with email '{$email}'.");
	}
}
