<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function all(Request $request)
    {
        $users = User::all();
        return ResponseFormatter::success($users, 'Data Users berhasil diambil');
    }

    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required', 'max:255', 'string'],
                'username' => ['required', 'min:4', 'string', 'unique:users'],
                'email' => ['required', 'min:4', 'email', 'unique:users'],
                'password' => ['required', new Password(min: 8)],
            ]);

            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            return ResponseFormatter::success($user, 'User Register Success');
        } catch (Exception $err) {
            return ResponseFormatter::error([
                'message' => ' Something Went Wrong',
                'error' => $err
            ], 'User Register Failed', 500);
        }
    }

    public function login(Request $request)
    {
        try {
            $credentials = request(['email', 'password']);
            if (!Auth::attempt($credentials)) {
                return ResponseFormatter::error([
                    'message' => 'Unauthorized',
                ], 'Authentication Failed', 500);
            }

            $user = User::where('email', $request->email)->firstOrFail();

            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return ResponseFormatter::success([
                'access-token' => $tokenResult,
                'token-type' => 'Bearer',
                'user' => $user,
            ], 'User Login Success');
        } catch (Exception $err) {
            return ResponseFormatter::error([
                'message' => 'Something Went Wrong',
                'error' => $err,
            ], 'Authentication Failed', 500);
        }
    }
    public function logout(Request $request)
    {
        $token = $request->user()->currentAccessToken()->delete();
        return ResponseFormatter::success($token, 'Data token revoked');
    }
}
