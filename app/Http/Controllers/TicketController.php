<?php

namespace App\Http\Controllers;

use App\Models\tombola;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index($tombola_id){
        $tombola = tombola::findOrFail($tombola_id);
        $date = Carbon::parse($tombola->date_tirage)->isoFormat("DDMMYYYY");
        $ticket_number = Auth::guard('users')->user()->id.mt_rand(1000000000, 9999999999).$date;
        return view('ticket.index',compact('tombola','ticket_number'));
    }
}
