<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tombola_ticket extends Model
{
    use HasFactory;

    public function tombola(){
        return $this->belongsTo('App\Models\tombola','tombola_id');
    }

    public function ticket(){
        return $this->belongsTo('App\Models\ticket','ticket_id');
    }
    public function lot(){
        return $this->belongsTo('App\Models\lot','lot_id');
    }
}
