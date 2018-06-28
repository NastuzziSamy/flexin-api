<?php
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Infrastructure;
class InfrastructureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $infras = [
            [
                'id' => '1',
                'name' => 'Labo Heudyasic',
                'description' => 'UTC',
            ],
        ];
    }
}
