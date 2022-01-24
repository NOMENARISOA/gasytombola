<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lot extends Model
{
    use HasFactory;
    public function company(){
        return $this->belongsTo('App\Models\company','company_id');
    }
    public function tombola(){
        return $this->belongsTo('App\Models\tombola','tombola_id');
    }
}
