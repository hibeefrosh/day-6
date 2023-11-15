<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexa()
    {
        return view('pages.indexa');
    }

    public function indexb()
    {
        return view('pages.indexb');
    }

    public function indexc()
    {
        return view('pages.indexc');
    }

    public function indexd()
    {
        return view('pages.indexd');
    }
}
