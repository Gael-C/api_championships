<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Fonction qui permet de créer un nouveau user et de génerer un Token
     *
     * @param Request $request
     * @return void
     * @authenticated
     */
    public function register(Request $request) {

       $validated = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:users',
        'password' => 'required'
       ]);

       $user = User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => bcrypt($validated['password'])
       ]);

       $token = $user->createToken('myToken')->plainTextToken;

       return new JsonResponse([
        'token' => $token,
        'token-type' => 'Bearer'
       ], 201);
    }

    public function login(Request $request) {
        
        if(!Auth::attempt($request->only('email', 'password'))) {
            return new JsonResponse(['message' => 'Login invalide'], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('c')->plainTextToken;
       
        return new JsonResponse([
            'access_token' => $token,
            'token_type' => 'Bearer'
        ], 200);
    }
}
