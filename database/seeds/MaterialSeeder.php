<?php
use Illuminate\Database\Seeder;
use App\Models\Material;
use App\Models\MaterialReference;
class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materials = [
            [
                'id'=>'1',
                'name'=>'PC',
                'picture'=>'test',
                'description'=>'PC en bon etat',
                'state'=>'RAS',
                'categorie_id'=>'1',
                'infrastructure_id'=>'1',
                'location_id'=>'1'
            ],
        ];
        foreach ($materials as $material) {
            $id = $material->id;
            MaterialReference::create([
                'materiel_id' => $id,
                'parent_id' => 'NULL'
            ]);
        }
    }
}
