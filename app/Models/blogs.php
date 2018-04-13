<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\View;
use Redirect;
use Input;
use DateTime;

class blogs extends Eloquent
{
    //

    protected $fillable = ['title','content','imageUrl','category','authorName','authorPic','tags' ];

    public static function insertContent($request)
    {
        //unofficial route to insert data to collection blogs

        $model = new self();
        $model->fill($request);
        $model->save();

    }

    public static function home()
    {
        // Method to populate the homepage

        $content = self::all();
        return $content;
        return View::make('blog')->with('data'.$content);

    }

}

