<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bicep;

class BicepController extends Controller
{
    public function index(){
        $bicep = Bicep::all();
        return response() -> json(['bicep' => $bicep]);
    }
    public function store(Request $request){
        return Bicep::create($request->all());
    }
    public function update(Request $request, $id){
        $bicep = Bicep::find($id);
        $bicep -> update($request -> all());
        return response()-> json(['bicep' => $bicep]);
    }
    public function destroy($id){
        $bicep = Bicep::find($id);
        $bicep -> delete();
        return response()-> json(['message' => 'Exercises Removed']);
    }
}
