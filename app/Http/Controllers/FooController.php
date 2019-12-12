<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooController extends Controller
{    
    public function  index($foo)
    {
    $foos=[
        'first-post'=>'sakthi',
        'second-post'=>'narmadha.'
    ];

    if(!array_key_exists($foo,$foos))
    {
        abort(404,'sorry this page doent exixt.');

    }
    return view('foo',['foo'=>$foos[$foo]
    ]);
    }
}

