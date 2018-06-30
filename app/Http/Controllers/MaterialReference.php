<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\MaterialReference;
class MaterialReferenceControlleur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MaterialReference::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json(MaterialReference::create([
            'materiel_id' => $request->input('user_id'),
            'type' => $request->input('type'),
            'value' => $request->input('value')
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
        $ref = MaterialReference::find($id);
        if ($ref)
            return $ref;
        else
            abort(404, 'Ref Materiel non trouvée');
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
        $ref = MaterialReference::find($id);
        if ($ref) {
            $ref->material_id = $request->input('user_id');
            $ref->type = $request->input('type');
            $ref->value = $request->input('value');
            $ref->save();
            return response()->json($ref);
        }
        else
            abort(404, 'Ref Materiel non trouvé');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ref = MaterialReference::find($id);
        if ($ref && $ref->delete())
            return abort(200);
        else
            abort(404, 'Ref non trouvé');
    }
}
