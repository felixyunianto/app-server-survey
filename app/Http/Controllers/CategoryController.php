<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sub_Category;
use App\Category;


class CategoryController extends Controller
{
    public function getData(){
        return Category::with('sub')->get();
    }
}
