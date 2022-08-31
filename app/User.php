<?php

/**
 * Modèle de la table User
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'password',
    ];

    public function pointing()
    {
        return $this->hasMany(Pointing::class);
    }


}
