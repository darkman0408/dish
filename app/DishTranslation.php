<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DishTranslation extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'title',
        'description', 
        'locale'
    ];

    /**
    * Get dish associated with this translation
    */
    public function dish()
    {
        return $this->belongsTo('App\Dish');
    }
}