<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
				//ini pemanggilan factory bung
				// Factory(App\User::class, 10)->create();
				
				User::create([
					'name'		=> 'Bambank',
					'email'		=> 'bambank@email.com',
					'email_verified_at' => now(),
					'password' 					=> Hash::make('222222'),
					'remember_token'		=> Str::random(10)
				]);
    }
}
