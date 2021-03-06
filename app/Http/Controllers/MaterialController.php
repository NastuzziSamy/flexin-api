<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Material;
class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Material::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json(Material::create([
            'name' => $request->input('name'),
            'picture' => $request->input('picture'),
            'description' => $request->input('description'),
            'state' => $request->input('state'),
            //les clés étrangères
            'category_id' => $request->input('category_id'),
            'infrastructure_id' => $request->input('infrastructure_id'),
            'position' => $request->input('position'),
            'location_id' => $request->input('location_id')
        ]), 201);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $material = Material::find($id);
        if ($material)
            return $material;
        else
            abort(404, 'Matériel non trouvé');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $material = Material::find($id);
        if ($material) {
            $material->name = $request->input('name');
            $material->picture = $request->input('picture');
            $material->description = $request->input('description');
            $material->state = $request->input('state');
            //gestion des clés étrangères
            $material->category_id = $request->input('category_id');
            $material->infrastructure_id = $request->input('infrastructure_id');
            $material->position = $request->input('position');
            $material->location_id = $request->input('location_id');
            $material->save();
            return response()->json($material);
        }
        else
            abort(404, 'Materiel non trouvé');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = Material::find($id);
        if ($material && $material->delete())
            return abort(200);
        else
            abort(404, 'Materiel non trouvée');
    }
}
