<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\plat;
use App\restaurant;
use App\commande;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $resto = restaurant::where('user_id',auth::id())->first();

        $plat = $resto->plats;
        $plat_new = $resto->plats()->where('created_at','>',Carbon::now()->subDays(6));
        $cde = commande::where('user_id',auth::id())->get();

        return view('back_end.dashboard', compact('plat','plat_new','cde','resto'));
    }
}
