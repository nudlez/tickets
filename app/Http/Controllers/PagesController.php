<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Shift;

class PagesController extends Controller
{
    public function index(){
        $shifts = DB::table('shifts')->orderBy('created_at', 'desc')->get();

        return view('index', ['shifts'=>$shifts]);
    }
}
