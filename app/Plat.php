<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    protected $fillable = ['libelle','description','prix','image','image2','image3','restaurant_id'];

    public function restaurant()
    {
    	return $this->belongsTo('App\Restaurant');
    }
    /**
     *Relations entre commande et plat
     */
    public function commandes()
    {
        return $this->belongsToMany('App\Commande')
                    ->withPivot('quantite')
                    ->withTimestamps();
    }
}
