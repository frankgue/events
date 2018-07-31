<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //public $timestamps = false;
    protected $fillable = ['name', 'description', 'location', 'price', 'start_at'];

    protected $guarded = ['id'];

    //protected $dates = ['start_at'];

    protected $casts = [
        'start_at' => 'datetime',
        'price' => 'real'
    ];

    protected $appends = ['fake_price'];

    public function isFree()
    {
        return $this->price == 0;
    }

    //Accesseurs
    public function getFakePriceAttribute($value)
    {
        return $this->attributes['price'] + 100;
    }

    //Mutateurs

    public function setPriceAttribute($price)
    {
        dd("prix modifié");
    }
}
