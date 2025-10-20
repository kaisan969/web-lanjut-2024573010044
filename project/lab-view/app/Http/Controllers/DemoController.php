<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    //simple data passing
    public function hello()
    {
        $name = 'Laravel Learner';
        return view('hello', ['name' => $name]);
    }

    //PARAMETERIZED ROUTE
    public function greet($name)
    {
        return view('greet', ['name' => ucfirst($name)]);
    }

    //query string
    public function search(Request $request)
    {
        $keyword = $request->query('q', 'none');
        return view('search', ['keyword' => $keyword]);
    }
}
