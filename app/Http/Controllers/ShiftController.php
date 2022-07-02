<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shift;
use App\Models\Ticket;

class ShiftController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'shift_date' => ['required', 'string'],
        ]);

        $shift = new Shift;
        $shift->shift_date = $request->shift_date;
        $shift->total_replies = 0;
        $shift->save();

        return back()->with('alert', 'New sheet created successfully');
    }

    public function get($id){
        $tickets = Ticket::where('shift_id', $id)->get();
        $shift = Shift::findOrFail($id);

        return view('shift_page', ['tickets'=>$tickets, 'shift'=>$shift]);
    }
}
