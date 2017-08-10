<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom','prenom' , 'telephone', 'telephone2', 'adresse', 'avatar', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     *Relations entre commande et users
     */
    public function commandes()
    {
        return $this->hasMany('App\Commande');
    }
    /**
     *Relations entre socialproviders et users
     */
    public function socialProviders()
    {
        return $this->hasMany('App\SocialProvider');
    }

    public function restaurant()
    {
        return $this->hasMany('App\restaurant');
    }


}
