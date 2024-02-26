<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Program;

class Leg extends Model
{
    protected $fillable = [
        'exercise',
        'target_muscle',
        'sets',
        'reps',
        'weight',
        'program_id'
    ];

    public function program(){
        return $this->belongsTo(Program::class);
    }
}
