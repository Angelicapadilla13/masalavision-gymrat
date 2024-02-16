<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tricep;

class TricepController extends Controller
{
    public function index(){
        $tricep = Tricep::all();
        return response() -> json(['tricep' => $tricep]);
    }
    public function store(Request $request){
        return Tricep::create($request->all());
    }
    public function update(Request $request, $id){
        $tricep = Tricep::find($id);
        $tricep -> update($request -> all());
        return response()-> json(['tricep' => $tricep]);
    }
    public function destroy($id){
        $tricep = Tricep::find($id);
        $tricep -> delete();
        return response()-> json(['message' => 'Exercises Removed']);
    }
}

