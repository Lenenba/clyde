<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MercurySeries\Flashy\Flashy;
use App\Plat;
use App\Restaurant;
use App\Commande;
use Cart;


class CartController extends Controller
{

    /**
     * liste de produits de notre panier
     *@param int $id du Restaurant
     *@return Response
     */
    public function cartContent($id)
    {   
        $plat = Plat::find($id);
        $restos = Restaurant::all(); 
        $resto = Restaurant::find($plat->restaurant_id);
        $plats = $resto->plats;


        Cart::add($plat->id, $plat->libelle, 1, $plat->prix, ['image'=>$plat->image2,'resto'=> $resto->nom]);

        return view('front_end.plats.index', compact('resto', 'plats','restos'));
    }
    /**
     * facture de produits de notre panier
     *
     *@return Response
     */
    public function panier()
    {   

        $resto = Restaurant::get();
        $Plats = Plat::get();

        return view ('front_end.carts.index', compact('resto', 'plats'));
    }   

    /**
     *ajouter la quantite d'un produits de notre panier
     *@param int $id
     *
     *@return Response
     */

    public function qtyPlus($id)
    {   

        $resto = Restaurant::get();
        $Plats = Plat::get();
        $cart = Cart::get($id);
        Cart::update($cart->rowId, $cart->qty + 1);

        Flashy::message('vous avez augmenter la quantite de '.$cart->name);
        return view ('front_end.carts.index', compact('resto', 'Plats'));
    }   

    /**
     *reduire la quantite d'un produits de notre panier
     *@param int $id
     *
     *@return Response
     */

    public function qtyMoins($id)
    {   

        $resto = Restaurant::get();
        $Plats = Plat::get();
        $cart = Cart::get($id);

        if($cart->qty == 1 )
        {
            if( Cart::count() <= 1)
                {
                       Cart::destroy();
                       Flashy::message('votre panier est vide');
                       return redirect()->route('homepage');
                }
            else{
                Cart::remove($cart->rowId);
                Flashy::message('vous avez enlevez '.$cart->name.' de votre panier');
                return view ('front_end.carts.index', compact('resto', 'Plats'));   
            }
            
        }
        else
        {
            Cart::update($cart->rowId, $cart->qty - 1);    
            Flashy::message('vous avez reduis la quantite de '.$cart->name);
            return view ('front_end.carts.index', compact('resto', 'Plats'));       
        }   

        
    }   


    /**
     *ajouter la quantite d'un produits de notre panier
     *@param int $id
     *
     *@return Response
     */

    public function supprimerProduit($id)
    {   

        $resto = Restaurant::get();
        $Plats = Plat::get();
        $cart = Cart::get($id);
        Cart::remove($cart->rowId);

        Flashy::message('vous avez supprimer '.$cart->name.' de votre panier');
        return view ('front_end.carts.index', compact('resto', 'Plats'));
    }

    public function store()
    {
        $restos = restaurant::all();
        $resto = Restaurant::where('user_id', Auth::id())->first();

        if(Cart::count() == 0)
        {
            return redirect()->route('homepage', compact('restos'));
            Flashy::message('vous navez aucun plats dans votre panier');
        }
        else
        {
            $commande = Commande::create(
            ['user_id'=>Auth::id(),
             'restaurant_id' => $resto->id,
             ]);

            foreach (Cart::content() as $plat) {
                    if($plat->qty == 0) $plat->qty = $plat->qty +1;
                    $commande->plats()->attach( $plat->id,['quantite' => $plat->qty]);
            }          
            Flashy::message('votre commande a bien eté enregistrer');
            Cart::destroy();
            return redirect()->route('homepage', compact('restos'));

        }
        
    }
}