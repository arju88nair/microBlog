<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\View;

class blogs extends Eloquent
{
    //

    protected $fillable = ['title', 'content', 'imageUrl', 'category', 'authorName', 'authorPic', 'tags'];

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

        $content = self::take(10)->get();
        return View::make('index')->with('data', $content);

    }

    public static function getByCategory($request)
    {

        // Method to get the data by category

        $category = $request['category'];
        if ($category == 'all') {
            $content = self::take(10)->get();
            return response(array('success' => true, 'code' => config('statuscodes.SUCCESS'), 'message' => config('statuscodes.SUCCESS_MESSAGE'), 'data' => $content));
        }
        $content = self::where('category', $category)->take(10)->get();
        return response(array('success' => true, 'code' => config('statuscodes.SUCCESS'), 'message' => config('statuscodes.SUCCESS_MESSAGE'), 'data' => $content));

    }


    public static function paginateCategory($request)
    {


        // Paginting data for lazyload

        $page = (int)$request['page'];
        $category = $request['category'];
        if ($category == 'all') {
            $content = self::take(10)->skip($page)->get();
            return response(array('success' => true, 'code' => config('statuscodes.SUCCESS'), 'message' => config('statuscodes.SUCCESS_MESSAGE'), 'data' => $content));
        }
        $content = self::where('category', $category)->take(10)->skip($page)->get();
        return response(array('success' => true, 'code' => config('statuscodes.SUCCESS'), 'message' => config('statuscodes.SUCCESS_MESSAGE'), 'data' => $content));

    }

    public static function detail($request)
    {


        // Method to get the data by category and page

        $id = $request['id'];

        $content = self::find($id);
        return View::make('detail')->with('data', $content);

    }

}

