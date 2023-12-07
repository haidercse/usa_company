<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __invoke()
    {
        // dd(request()->segment(1));
        return view('frontend.pages.'.request()->segment(1));
    }
}
