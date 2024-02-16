<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leg;

class LegController extends Controller
{
    public function index(){
        $leg = Leg::all();
        return response() -> json(['leg' => $leg]);
    }
    public function store(Request $request){
        return Leg::create($request->all());
    }
    public function update(Request $request, $id){
        $leg = Leg::find($id);
        $leg -> update($request -> all());
        return response()-> json(['leg' => $leg]);
    }
    public function destroy($id){
        $leg = Leg::find($id);
        $leg -> delete();
        return response()-> json(['message' => 'Exercise Removed']);
    }
}
