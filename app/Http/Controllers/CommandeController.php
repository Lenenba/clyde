<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MercurySeries\Flashy\Flashy;
use App\Plat;
use App\Restaurant;
use App\Commande;
use Cart;


class CommandeController extends Controller
{

    /**
     * liste des commande de notre panier
     *@return Response
     */
    public function index()
    {   
         $resto = Restaurant::where('user_id', Auth::id())->first();
         $plats = $resto->plats;
         $cde = $resto->commandes;
        
        return view('back_end.commandes.index', compact('resto', 'plats','cde'));
    }

    /**
     * facture
     *@param int $id
     *@return Response
     */
    public function invoice($id)
    {
         $resto = Restaurant::where('user_id', Auth::id())->first();
         $plats = $resto->plats;
         $cde = Commande::find($id);
         $list = Commande::find($id)->plats;

      return view('back_end.commandes.invoice', compact('resto', 'plats','list','cde'));
    }

} 