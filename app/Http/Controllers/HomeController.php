<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    function index()
    {
        if (session('locale') == null) {
            session(['locale' => App::currentLocale()]);
        }
        $categories = Categories::all();
        return view('index', [
            'categories' => $categories
        ]);
    }
}
