<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    function index(Request $request) {

        $products = DB::table('products')
                        ->select('products.*', 'category_name')
                        ->join('categories', 'products.category_id', '=', 'categories.category_id')
                        ->when($_GET['category'] ?? null, function ($query, $category) {return $query->where('products.category_id', $category);})
                        ->when($_GET['sort'] ?? null, function ($query, $sort) {return $query->orderBy('products.product_price', $sort);})
                        ->when($_GET['min_price'] ?? null, function ($query, $pMin) {return $query->where('products.product_price', '>=', $pMin);})
                        ->when($_GET['max_price'] ?? null, function ($query, $pMax) {return $query->where('products.product_price', '<=', $pMax);})
                        ->get();
        $categories = Categories::all();
        $currentCategory = Categories::find($_GET['category'] ?? null);
        $currentURL = $request->url();

        // foreach($products as $key => $product){
        //     $products[$key]->product_image = $products[$key]->product_image;
        // }

        // return dd($products);
        return view('products', [
            'products' => $products,
            'categories' => $categories,
            'currentCategory' => $currentCategory,
            'currentURL' => $currentURL
        ],);
    }

    // function category($id, Request $request){
    //     $products = DB::table('products')->select('products.*', 'category_name')->join('categories', 'products.category_id', '=', 'categories.category_id')->where('products.category_id', '=', $id)->get();
    //     $categories = Categories::all();
    //     $currentCategory = Categories::find($id);
    //     $currentURL = $request->url();

    //     // return dd($currentCategory);
    //     return view('products', [
    //         'products' => $products,
    //         'categories' => $categories,
    //         'currentCategory' => $currentCategory,
    //         'currentURL' => $currentURL
    //     ],);
    // }
}
