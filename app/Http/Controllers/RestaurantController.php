<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Plat;
use App\Restaurant;

class RestaurantController extends Controller
{
   
    /**
     * liste de Plats en fonction des Restaurants selectionnés
     *front_end
     *@param  int  $id
     *@return Response
     */
    public function index()
    {
         $restos = restaurant::all();
        return view('front_end.restaurants.index', compact( 'restos'));
    }
    
}