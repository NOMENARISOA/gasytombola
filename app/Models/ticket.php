<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;

    public function tombola(){
        return $this->belongsTo('App\Models\tombola','tombola_id');
    }
}
