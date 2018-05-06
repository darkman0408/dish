<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Dimsav\Translatable\Translatable;

class Dish extends Model
{
    use SoftDeletes;
    use Translatable;

    //protected $dateFormat = 'U';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public $translatedAttributes = [
        'title',
        'description'
    ];    

     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at'
    ];

    /**
     * Get dish category
     */
    public function category()
    {
        return $this->hasOne('App\Category');
    }

    /**
     * Get ingredients of dish
     */
    public function ingredients()
    {
        return $this->hasMany('App\Ingredient');
    }

    /**
     * Get tags of dish
     */
    public function tags()
    {
        return $this->hasMany('App\Tag');
    }

    /**
     * Get translations
     */
    public function dishTranslations()
    {
        return $this->hasMany('App\DishTranslation');
    }
}
