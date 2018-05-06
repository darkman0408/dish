<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Dimsav\Translatable\Translatable;

class Tag extends Model
{
    use Translatable;

    public $timestamps = false;

    public $translatedAttributes = ['title'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dish_id', 
        'slug',
    ];

    /**
    * Get dish associated with this tag
    */
    public function dish()
    {
        return $this->belongsTo('App\Dish');
    }
}
