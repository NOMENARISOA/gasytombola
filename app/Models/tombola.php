<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tombola extends Model
{
    use HasFactory;

    public function lot(){
        return $this->hasMany('App\Models\lot','tombola_id');
    }
    public function ticket(){
        return $this->hasMany('App\Models\ticket','tombola_id');
    }
    public function gagant(){
        return $this->hasMany('App\Models\tombola_ticket','tombola_id');
    }
}
