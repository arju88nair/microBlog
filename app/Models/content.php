<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use View;
use Redirect;
use Input;
use DateTime;

class content extends Eloquent
{
    //


    public static function insertContent($request)
    {
        $model = new self();
        $model->name = "Fuck";
        $model->save();
    }
}

