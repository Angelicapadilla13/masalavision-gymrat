<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chest;
class ChestController extends Controller
{
    public function index(){
        $chest = Chest::all();
        return response() -> json(['chest' => $chest]);
    }
    public function store(Request $request){
        return Chest::create($request->all());
    }
    public function update(Request $request, $id){
        $chest = Chest::find($id);
        $chest -> update($request -> all());
        return response()-> json(['chest' => $chest]);
    }
    public function destroy($id){
        $chest = Chest::find($id);
        $chest -> delete();
        return response()-> json(['message' => 'Exercises Removed']);
    }
}
