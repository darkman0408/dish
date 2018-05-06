<?php

namespace App\Http\Controllers;
use App\Dish;
use App\Tag;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\App;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $meals = Dish::all();

        //display specific number of items
        /* $per_page = $request->query('per_page');
        if($per_page !== null)
        {
            $meals = Dish::with('dishTranslations')->paginate($per_page);
            return view('dish.index', [
                'meals' => $meals,
            ]);
        }

        //select by tags
        $tags = $request->query('tags');
        if($tags !== null)
        {
            $tags = $this->toArray($tags);

            $meals = Dish::with('tags')->whereHas('tags', function($query) use ($tags) {
                return $query->whereIn('dish_id', $tags); 
            })->get(); 
            
            return view('dish.index', [
                'meals' => $meals,
            ]);
        } */
        
        return view('dish.index', [
            'meals' => $meals,
        ]);
    }

    public function meals($id = 3)
    {
        return view('dish.meals', [
            'id' => $id,
        ]);
    }

    /* 
    public function meals(Request $request)
    {
        $tags_url = $request->tags;
        $per_page = $request->per_page;
        $lang = $request->lang;
        $category = $request->category;

        if($lang != null)
        {
            \App::setLocale($lang);
        }

        $meals = Dish::with('dishTranslations');

        $tags_url = $this->toArray($tags_url);
        $meals_tags = Dish::with('tags')->whereHas('tags', function($query) use ($tags_url) {
            return $query->whereIn('dish_id', $tags_url); 
        });
       
        // per page and tags
        if($tags_url != null && $per_page != null)
        {
            $meals = $meals_tags->skip(0)->take($per_page)->get();
        }
        else if($tags_url != null)
        {
            $meals = $meals_tags->get();
        }

        // category
        if($category != null)
        {
            $meals = $meals->join('categories', function($join) {
                $join->on('dishes.id', '=', 'categories.dish_id');
            })->get();
        }

        return view('dish.meals', [
            'meals' => $meals,
            'lang' => $lang,
        ]);

    } */

    private static function toArray($string)
    {
        $array = explode(',', $string);
        return $array;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
