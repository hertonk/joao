<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Participant;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $participants = Participant::orderBy('created_at', 'ASC')
                        ->where('athletic_id', Auth::user()->athletic_id)
                        ->get();
        
        $lote1 = Participant::orderBy('created_at', 'ASC')
                        ->where('athletic_id', Auth::user()->athletic_id)
                        ->where('lote', 1)
                        ->where('status', 2)
                        ->get();

        $lote2 = Participant::orderBy('created_at', 'ASC')
                        ->where('athletic_id', Auth::user()->athletic_id)
                        ->where('lote', 2)
                        ->where('status', 2)
                        ->get();

        $lote3 = Participant::orderBy('created_at', 'ASC')
                        ->where('athletic_id', Auth::user()->athletic_id)
                        ->where('lote', 3)
                        ->where('status', 2)
                        ->get();

        $lote4 = Participant::orderBy('created_at', 'ASC')
                        ->where('athletic_id', Auth::user()->athletic_id)
                        ->where('lote', 4)
                        ->where('status', 2)
                        ->get();

        return view('home', compact('participants',  'lote1', 'lote2', 'lote3', 'lote4'));
    }

    public function detalhe($id)
    {

        $participant = Participant::find($id);

        return view('detalhe', compact('participant'));
    }

}
