<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Builder\FunctionLike;

class SiteController extends Controller
{
    public function index($slug=null)
    {
        if($slug==null)
        {
            return $this->home();
        }
        else
        {
            ...
        }
    }
    #Home
    private function home()
    {
        ...
    }
}
