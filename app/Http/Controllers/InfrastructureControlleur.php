<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Infrastructure;
class InfrastructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Infrastructure::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json(Infrastructure::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
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
        $infrastructure = Infrastructure::find($id);
        if ($infrastructure)
            return $infrastructure;
        else
            abort(404, 'Infrastructure non trouvée');
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
        $infrastructure = Infrastructure::find($id);
        if ($infrastructure) {
            $infrastructure->name = $request->input('name');
            $infrastructure->description = $request->input('description');
            $infrastructure->save();
            return response()->json($infrastructure);
        }
        else
            abort(404, Infrastructure non trouvée');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $infrastructure = Infrastructure::find($id);
        if ($infrastructure && $infrastructure->delete())
            return abort(200);
        else
            abort(404, Infrastructure non trouvée');
    }
}
