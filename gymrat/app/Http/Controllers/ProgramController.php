<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index(){
        return Program::with('chest','shoulder','tricep','bicep','back','leg')->get();
    }
    public function store(Request $request){
        $program = Program::create($request->all());
        if($request->has('chest')){
            $program->chest()->createMany($request->input('chest'));
        }
        if($request->has('shoulder')){
            $program->shoulder()->createMany($request->input('shoulder'));
        }
        if($request->has('tricep')){
            $program->tricep()->createMany($request->input('tricep'));
        }
        if($request->has('bicep')){
            $program->bicep()->createMany($request->input('bicep'));
        }
        if($request->has('back')){
            $program->back()->createMany($request->input('back'));
        }
        if($request->has('leg')){
            $program->leg()->createMany($request->input('leg'));
        }
        return response()-> json([$program,201]);
    }
    public function update(Request $request, $title){
        $program = Program::find($title);
        $program -> update($request -> all());
        return response()-> json(['program' => $program]);
    }
    public function destroy($title){
        $program = Program::find($title);
        $program -> chest()->delete();
        $program -> delete();
        return response()-> json(['message' => 'Program Removed']);
    }
}
