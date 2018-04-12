<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogs;
class contentController extends Controller
{
    //

    public static function create(Request $request)
    {
        return blogs::insertContent($request->all());
    }
}
