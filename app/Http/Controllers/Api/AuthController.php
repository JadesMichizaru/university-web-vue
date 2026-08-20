<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function Register(Request $request) {
        $validator = Validator::make($request->all(), [
           'name' => 'required|string',
           'email' => 'required|email|unique:users,email',
           'role' => 'required|in:admin,guru,siswa',
           'password' => 'required|string|min:8'
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $userAuth = User::create([])
    }

    public function Login(Request $request) {
        $validator = Validator::make($request->all(), [

        ]);
    }
}
