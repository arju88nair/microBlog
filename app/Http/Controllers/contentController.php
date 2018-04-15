<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogs;
use League\Flysystem\Config;

class contentController extends Controller
{


    public static function create(Request $request)
    {
        return blogs::insertContent($request->all());
    }


    public static function home(Request $request)
    {
        return blogs::home();
    }

    public static function getByCategory(Request $request)
    {

        if(!$request['category'])
        {
            return response(array('success'=>false,'code' => config('statuscodes.MISSING_PARAMETER'),'message'=>config('statuscodes.MISSING_PARAMETER_MESSAGE')));
        }
        return blogs::getByCategory($request->all());
    }

    public static function paginate(Request $request)
    {

        if(!$request['page'] || !$request['category'])
        {
            return response(array('success'=>false,'code' => config('statuscodes.MISSING_PARAMETER'),'message'=>config('statuscodes.MISSING_PARAMETER_MESSAGE')));
        }
        return blogs::paginateCategory($request->all());
    }

    public static function detail(Request $request)
    {

        if(!$request['id'] )
        {
            return response(array('success'=>false,'code' => config('statuscodes.MISSING_PARAMETER'),'message'=>config('statuscodes.MISSING_PARAMETER_MESSAGE')));
        }
        return blogs::detail($request->all());
    }
}
