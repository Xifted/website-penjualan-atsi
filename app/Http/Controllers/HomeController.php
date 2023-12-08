<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

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
    public function actionOrders(Request $request)
    {
        DB::table('orders')->insert([
            'company_name' => $request->input('companyName'),
            'pic_name' => $request->input('picName'),
            'service_type' => $request->input('serviceType'),
            'company_phone' => $request->input('companyPhone'),
            'phone_number' => $request->input('phoneNumber'),
            'email_company' => $request->input('emailCompany'),
            'company_address' => $request->input('companyAddress'),
            'created_at' => now()
        ]);

        return redirect('/')->with('success', 'Order berhasil disimpan.');;
    }
}
