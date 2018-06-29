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
            abort(404, 'Matérile non trouvé');
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
            //gestion des clés etrangeres
            $category->save();
            return response()->json($category);
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
