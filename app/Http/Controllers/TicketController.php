<?php

namespace App\Http\Controllers;

use App\Http\Classe\vanillapay;
use App\Models\ticket;
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

    public function checkout(Request $request){

        $user = Auth::guard('users')->user();

        $ticket_exist = ticket::where('user_id','=',$user->id)->where('tombola_id','=',$request->get("tombola_id"))->get();

        if($ticket_exist->count() > 0){

            return response()->json(['url' =>  route('ticket.index',[$request->get("tombola_id")]), 'idpanier' =>  $request->get("ticket_number")]);

        }else{

            $ticket = new ticket();

            $ticket->tombola_id = $request->get("tombola_id");
            $ticket->user_id = $user->id;
            $ticket->number = $request->get("ticket_number");
            $ticket->status = 0;

            $ticket->save();
            $vanillapay = new vanillapay();
            $reference = $request->get("ticket_number");
            $idpanier = $request->get("ticket_number");
            $response = $vanillapay->payer($user->name,'2000',$reference,$idpanier);
            return response()->json(['url' =>  'https://moncompte.ariarynet.com/payer/'.$response, 'idpanier' => $idpanier]);
        }

    }
}
