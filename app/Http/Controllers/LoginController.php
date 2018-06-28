<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserReference;

class LoginController extends Controller
{
    public function login(Request $request, string $reference) {
        $userReference = UserReference::find($reference);

        if ($userReference) {
            \Auth::login($userReference->user);

            return response()->json($request->user());
        }
        else
            abort(404, 'Utilisateur non trouvé');
    }
}
