<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\content;
class contentController extends Controller
{
    //

    public static function create(Request $request)
    {
        return content::insertContent($request->all());
    }
}
