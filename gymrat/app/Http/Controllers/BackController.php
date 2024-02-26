<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Back;

class BackController extends Controller
{
    public function index(){
        $back = Back::all();
        return response() -> json(['back' => $back]);
    }
    public function store(Request $request){
        return Back::create($request->all());
    }
    public function update(Request $request, $id){
        $back = Back::find($id);
        $back -> update($request -> all());
        return response()-> json(['back' => $back]);
    }
    public function destroy($id){
        $back = Back::find($id);
        $back -> delete();
        return response()-> json(['message' => 'Exercises Removed']);
    }
}
