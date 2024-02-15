<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Hash;
class AuthController extends Controller
{
    public function register(Request $request){


        $validator = Validator::make($request->all(), [
            'username'=>'required|min:4|max:100',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|max:100',
            'confirm_password'=>'required|same:password',
            'age'=>'required|min:2|max:100',
            'gender'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message'=>'Validation Failed',
                'errors'=>$validator->errors()
            ],422);
        };
        
        $user=User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'password'=>Hash::make($request->password)
        ]);

        return response()->json([
            'message'=>'Registration Succesful',
            'data'=>$user
        ],200);
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message'=>'Validation Failed',
                'errors'=>$validator->errors()
            ],422);
        };

        $user=User::where('email', $request->email)->first();

        if($user){
            if(Hash::check($request->password,$user->password)){
                $token=$user->createToken('auth-token')->plainTextToken;
                return response()->json([
                    'message'=>'Login Succesful',
                    'token'=>$token,
                    'data'=>$user
                ],200);
            }
            
            else{
                return response()->json([
                    'message'=>'Incorrect Password',
    
                ],400);
            }
        }
        else{
            return response()->json([
                'message'=>'Account Not Found',

            ],400);
        };
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message'=>'User Successfully logged out',
        ],200);
    }
}
