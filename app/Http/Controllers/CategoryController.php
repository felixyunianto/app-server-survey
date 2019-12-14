<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sub_Category;
use App\Category;


class CategoryController extends Controller
{
    public function getData(){
        $category = Category::with('sub')->get();

        // $sub = Sub_Category::with('questions')->get();
        return $category;
    }
}
