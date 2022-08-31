<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    // protected $primaryKey = ['id'];
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];
    
        public function cities()
    {
        return $this->hasMany(City::class);
    }

}
