<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Usercontorole extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string|required',
            'email' => 'email|required|unique:users,email,except,id',
            'password' => 'string|required',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user = User::where('email',$request->email)->first();
        $token = $user->createToken('tokenUser')->plainTextToken;
        return response()->json( [
            'massage' => 'akun berhasil di buat',
            'akun' => $user,
            'token' => $token,
        ]);
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string',
        ]);
        $user = User::where('email', $request->email)->first();
        $token = $user->createToken('tokenUser')->plainTextToken;
        return response()->json([
            'message' => 'Token berhasil di buat',
            'token' => $token,
        ], 200);

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
