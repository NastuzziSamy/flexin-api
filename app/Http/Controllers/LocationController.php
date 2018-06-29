<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Location;
class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Location::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json(Location::create([
            'building' => $request->input('building'),
            'room' => $request->input('room'),
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
        $location = Location::find($id);
        if ($location)
            return $location;
        else
            abort(404, 'Emplacement non trouvé');
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
        $location = Location::find($id);
        if ($location) {
            $location->building = $request->input('building');
            $location->room = $request->input('room');
            $location->save();
            return response()->json($location);
        }
        else
            abort(404, 'Emplacement non trouvé');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Location::find($id);
        if ($location && $location->delete())
            return abort(200);
        else
            abort(404, 'Emplacement non trouvé');
    }
}
