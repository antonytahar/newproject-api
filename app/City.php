<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    // protected $primaryKey = ['id'];
    // public $incrementing = false;
    public $timestamps = false;
    //protected $foreignKey = ['country' => 'country_id'];
    protected $with = ['country'];
    protected $fillable = [
        'country_id',
        'post_code',
        'name',
        'latitude',
        'longitude',
    ];
    protected $casts=[
        // 'country_id' => 'integer',
        // 'post_code' => 'string',
        // 'name' => 'string',
        // 'latitude' => 'string',
        // 'longitude' => 'string',

    ];
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id' , 'id'); // Correspond à une foreign key
    }
}
