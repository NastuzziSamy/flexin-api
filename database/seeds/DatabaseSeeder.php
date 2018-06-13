<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (env('APP_DEBUG', false)) {
			$this->call([
				UsersTableSeeder::class,
			]);
		}
    }
}
