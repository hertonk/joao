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

        return view('home', compact('participants'));
    }

    public function detalhe($id)
    {

        $participant = Participant::find($id);

        return view('detalhe', compact('participant'));
    }

}
