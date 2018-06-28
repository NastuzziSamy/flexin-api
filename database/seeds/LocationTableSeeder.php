<?php
use Illuminate\Database\Seeder;
use App\Models\Locations;
class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loc = [
            [
                'building'=>'GI',
                'room'=>'0202'
            ],
        ];
    }
}
