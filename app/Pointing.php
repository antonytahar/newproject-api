<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pointing extends Model
{
    protected $table = 'pointings';
    protected $with = ['user'];
    protected $fillable = [
        'title',
        'duration',
        'date',
        'status',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id' , 'id'); // Correspond à une foreign key
    }
}
