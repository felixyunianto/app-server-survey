<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sub_Category;

class PertanyaanController extends Controller
{
    public function getPertanyaan(){
        $questions = Sub_Category::with('questions')->get();

        // $sub = Sub_Category::with('questions')->get();
        return $questions;
    }
}
