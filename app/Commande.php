<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = ['user_id','restaurant_id'];

    /**
     *Relations entre commande et users
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     *Relations entre commande et restaurant
     */
    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }
    /**
     *Relations entre commande et plat
     */
    public function plats()
    {
        return $this->belongsToMany('App\Plat')
                    ->withPivot('quantite')
                    ->withTimestamps();
    }
}
