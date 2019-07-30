<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicity extends Model
{

    protected $table = 'publicities';



    static function getPublicity()
    {
        try {
            $publicity = Publicity::whereDate('finish', '>=', date('Y-m-d'))
                                ->inRandomOrder()
                                ->take(1)
                                ->get();

            if (isset($publicity[0])) {
                $publicity = $publicity[0];
            }

        } catch (Illuminate\Database\QueryException $e) {
            dd($e);
        } catch (PDOException $e) {
            dd($e);
        }

        return $publicity;
    }
}