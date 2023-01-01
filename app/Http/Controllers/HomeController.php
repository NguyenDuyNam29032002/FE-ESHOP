<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->get();
//        dd($banners);
        $categories = Category::where('parent_id', 0)->get();
//        dd($categories->toArray());
        return view('home.home', compact('banners', 'categories'));
    }
}
