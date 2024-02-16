<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shoulder;

class ShoulderController extends Controller
{
    public function index(){
        $shoulder = Shoulder::all();
        return response() -> json(['shoulder' => $shoulder]);
    }
    public function store(Request $request){
        return Shoulder::create($request->all());
    }
    public function update(Request $request, $id){
        $shoulder = Shoulder::find($id);
        $shoulder -> update($request -> all());
        return response()-> json(['shoulder' => $shoulder]);
    }
    public function destroy($id){
        $shoulder = Shoulder::find($id);
        $shoulder -> delete();
        return response()-> json(['message' => 'Exercises Removed']);
    }
}
