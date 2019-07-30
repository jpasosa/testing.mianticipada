<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';


    public function Events()
    {
        return $this->belongsToMany( Event::class, 'events_categories' );
    }

    static function getToShowInHome()
    {
        try {

            $categories = Category::orderBy('order', 'asc')
                                ->take(6)
                                ->get();

        } catch (Illuminate\Database\QueryException $e) {
            dd($e);
        } catch (PDOException $e) {
            dd($e);
        }

        return $categories;
    }


}
