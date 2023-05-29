<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $categories = Categories::all();
        return view('index', [
            'categories' => $categories
        ]);
    }
}
