<?php
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserReference;
class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cats = [
            [
                'id'=>'1',
                'name'=>'Vehicule Autonome',
                'parent_id'=>'NULL'
            ],
        ];
    }
}
