<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json(Category::create([
            'lastname' => $request->input('lastname'),
            'firstname' => $request->input('firstname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'company' => $request->input('company'),
            'type' => $request->input('type'),
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
        $category = Category::find($id);
        if ($category)
            return $category;
        else
            abort(404, 'Catégorie non trouvée');
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
        $user = User::find($id);
        if ($user) {
            $user->lastname = $request->input('lastname');
            $user->firstname = $request->input('firstname');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->company = $request->input('company');
            $user->type = $request->input('type');
            $user->save();
            return response()->json($user);
        }
        else
            abort(404, 'Utilisateur non trouvé');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user && $user->delete())
            return abort(200);
        else
            abort(404, 'Utilisateur non trouvé');
    }
}
