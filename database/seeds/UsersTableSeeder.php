<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserReference;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'lastname' => 'NASTUZZI',
                'firstname' => 'Samy',
                'email' => 'samy.nastuzzi@etu.utc.fr',
                'phone' => '0706050403',
                'company' => 'UTC',
                'type' => 'Responsable'
            ],
            [
                'lastname' => 'AMAROUCHE',
                'firstname' => 'Reyhan',
                'email' => 'reyhan.amarouche@etu.utc.fr',
                'phone' => '0605040302',
                'company' => 'UTC',
                'type' => 'Responsable'
            ],
        ];

        foreach ($users as $user) {
            $id = User::create($user)->id;

            UserReference::create([
                'user_id' => $id,
                'type' => 'NFC',
                'value' => '00000000'
            ]);
        }
    }
}
