<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Plat;
use App\Restaurant;
use App\Commande;

class PlatController extends Controller
{
   
    /**
     * liste de Plats en fonction des Restaurants selectionnés
     *front_end
     *@param  int  $id
     *@return Response
     */
    public function index($id)
    {
         $resto = restaurant::find($id);
         $plats = $resto->plats;
        return view('front_end.plats.index', compact('plats', 'resto'));
    }

    /**
     * liste de Plats en fonction des Restaurants 
     *back_end
     *@param  int  $id
     *@return Response
     */
    public function listIndex()
    {
         $resto = restaurant::where('user_id',auth::id())->first();
         $plats = $resto->plats;

         $cde = commande::where('user_id',auth::id())->get();

        return view('back_end.plats.index', compact('resto', 'plats','cde'));
    }    

    /**
     * voir un produits particulier
     *front_end
     *@param int $id
     *@return Response
     *
     */

    public function show($id)
    {
        $Plat = Plat::where("id_Plat", $id)->first(); 

        $Plats = Plat::where('fk_resto_Plat', $Plat->fk_resto_Plat)->paginate(3);

        $resto = Restaurant::where('id', $Plat->fk_resto_Plat)->first();

        return view('front_end.Plats.show', compact('Plats', 'Plat','resto'));      
    }

    /**
     * voir un produits particulier pour 
     * back_end
     *@param int $id
     *@return Response
     *
     */

    public function detail($id)
    {
        $plat = Plat::find($id);
        $cde = commande::where('user_id',auth::id())->get();

        $resto = Restaurant::where('user_id', Auth::id())->first();

        return view('back_end.Plats.detail', compact('resto', 'plat','cde'));      
    }

    /**
     * 
     * formulaire de creation d'un nouveau Plat 
     *back_end
     *@return Response
     *
     */

    public function create()
    {
        $resto = Restaurant::where('user_id', Auth::id())->first();
        $plat = new Plat;
        $cde = commande::where('user_id',auth::id())->get();

        $platForm = new Plat;
        return view('back_end.Plats.create', compact('plat', 'platForm','resto','cde'));
    }
    /**
     * 
     *enregistrement d'un nouveau Plat 
     *back_end
     *@return Response
     *
     */

    public function store(Request $request)
    {

        $this->validate($request, [
                'libelle'=>'required|min:15',
                'description'=>'required|min:50',
                'prix'=>'required|min:3|numeric',
                'imagel'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image2'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image3'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
              ]);

        $image1 = file_uploader('image2', $request);
        $image2 = file_uploader('image3', $request);
        $image_large = file_uploader_large('imagel', $request);

        $resto = Restaurant::where('user_id', Auth::id())->first();

        $Plat = Plat::create([
                    'libelle'=>$request->libelle,
                    'description'=>$request->description,
                    'prix'=>$request->prix,                    
                    'image'=>$image_large,
                    'image2'=>$image1,
                    'image3'=>$image2,
                    'restaurant_id'=>$resto->id,
                ]);
        return redirect()->route('list_plats_back');

    }




}
