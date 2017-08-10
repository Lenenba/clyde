<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['nom','slogan','email','adresse','heure_ouverture','heure_fermeture','telephone					','user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function plats()
    {
    	return $this->hasMany('App\Plat');
    }

    public function commandes()
    {
    	return $this->hasMany('App\Commande');
    }

}
