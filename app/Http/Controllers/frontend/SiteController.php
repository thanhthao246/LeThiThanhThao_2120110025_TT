<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Builder\FunctionLike;

class SiteController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
}
