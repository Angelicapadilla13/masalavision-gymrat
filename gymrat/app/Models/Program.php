<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Chest;
use App\Models\Shoulder;
use App\Models\Tricep;
use App\Models\Bicep;
use App\Models\Back;
use App\Models\Leg;

class Program extends Model
{
    protected $fillable = [
        'title'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function chest(){
        return $this->hasMany(Chest::class);
    }
    public function shoulder(){
        return $this->hasMany(Shoulder::class);
    }
    public function tricep(){
        return $this->hasMany(Tricep::class);
    }
    public function bicep(){
        return $this->hasMany(Bicep::class);
    }
    public function back(){
        return $this->hasMany(Back::class);
    }
    public function leg(){
        return $this->hasMany(Leg::class);
    }
    
}
