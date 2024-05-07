<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $totalProduct = DB::table('products')->count();
        $totalCategory = DB::table('categories')->count();

        return view('admin.dashboard', [
            'totalProduct' => $totalProduct,
            'totalCategory' => $totalCategory,
        ]);
    }

    public function login()
    {
        return view('admin.adminlogin');
    }

    public function actionLoginAdmin(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];

        if (Auth::guard('admin')->attempt($data)) {
            return redirect('/admin/dashboard');
        } else {
            return redirect('/admin/login');
        }
    }

    public function products()
    {
        $products = DB::table('products')
            ->select('products.*', 'categories.category_name')
            ->join('categories', 'products.category_id', 'categories.category_id')
            ->when($_GET['search'] ?? null, function ($query, $search) {
                return $query->where('product_name', 'LIKE', '%' . $search . '%');
            })
            ->get();

        $productItem = DB::table('products')
            ->select('products.*', 'categories.category_name')
            ->join('categories', 'products.category_id', 'categories.category_id')
            ->where('products.product_id', '=', $_GET['product_id'] ?? null)
            ->get();
        $categories = DB::table('categories')->select('*')->get();
        $product = Products::find($_GET['product_id'] ?? null);

        // return dd($productItem);
        return view('admin.products-list', [
            'products' => $products,
            'productItem' => $productItem,
            'categories' => $categories,
            'product' => $product
        ]);
    }

    public function actionAddProduct(Request $request)
    {
        $imagePath = $request->file('productImage')->store('img/products');
        // return dd($imagePath);

        DB::table('products')->insert([
            'product_name' => $request->input('productName'),
            'category_id' => $request->input('categoryName'),
            'product_image' => $imagePath,
            'product_description' => $request->input('productDescription'),
            'product_price' => $request->input('productPrice'),
            'stock' => $request->input('productStock'),
            'created_at' => now(),
        ]);

        return redirect('/admin/products');
    }

    public function actionEditProduct(Request $request, $id)
    {
        if ($request->file('productImage') == null) {
            DB::table('products')
                ->where('product_id', '=', $id)
                ->update([
                    'product_name' => $request->input('productName'),
                    'category_id' => $request->input('categoryName'),
                    'product_description' => $request->input('productDescription'),
                    'product_price' => $request->input('productPrice'),
                    'stock' => $request->input('productStock'),
                    'updated_at' => now(),
                ]);
        } else {
            if ($request->file('productImage')) {
                if ($request->oldImage) {
                    Storage::delete($request->oldImage);
                }
                $imagePath = $request->file('productImage')->store('img/products');
            }
            DB::table('products')
                ->where('product_id', '=', $id)
                ->update([
                    'product_name' => $request->input('productName'),
                    'category_id' => $request->input('categoryName'),
                    'product_image' => $imagePath,
                    'product_description' => $request->input('productDescription'),
                    'product_price' => $request->input('productPrice'),
                    'stock' => $request->input('productStock'),
                    'updated_at' => now(),
                ]);
        }

        return redirect('/admin/products');
    }

    public function actionDeleteProduct($id)
    {
        DB::table('products')->where('product_id', '=', $id)->delete();

        return redirect('/admin/products');
    }

    public function categories()
    {
        $categories = DB::table('categories')
            ->select('*')
            ->when($_GET['search'] ?? null, function ($query, $search) {
                return $query->where('category_name', 'LIKE', '%' . $search . '%')->orWhere('category_description', 'LIKE', "%$search%");
            })
            ->get();

        $categoryItem = DB::table('categories')
            ->select('*')
            ->where('category_id', '=', $_GET['category_id'] ?? null)
            ->get();

        // return dd($productItem);
        return view('admin.categories-list', [
            'categoryItem' => $categoryItem,
            'categories' => $categories
        ]);
    }

    public function actionAddCategory(Request $request)
    {
        DB::table('categories')->insert([
            'category_name' => $request->input('categoryName'),
            'category_description' => $request->input('categoryDescription'),
            'created_at' => now(),
        ]);

        return redirect('/admin/categories');
    }

    public function actionDeleteCategory($id)
    {
        DB::table('categories')->where('category_id', '=', $id)->delete();

        return redirect('/admin/categories');
    }

    public function actionEditCategory(Request $request, $id)
    {
            DB::table('categories')
                ->where('category_id', '=', $id)
                ->update([
                    'category_name' => $request->input('categoryName'),
                    'category_description' => $request->input('categoryDescription'),
                    'updated_at' => now(),
                ]);

        return redirect('/admin/categories');
    }

    public function orders()
    {
        $orders = DB::table('orders')
            ->select('*')
            ->when($_GET['search'] ?? null, function ($query, $search) {
                return $query->where('company_name', 'LIKE', '%' . $search . '%')->orWhere('pic_name', 'LIKE', "%$search%");
            })
            ->orderBy('created_at', 'DESC')
            ->get();

        $orderItem = DB::table('orders')
            ->select('*')
            ->where('id', '=', $_GET['order_id'] ?? null)
            ->get();

        // return dd($productItem);
        return view('admin.orders-list', [
            'orderItem' => $orderItem,
            'orders' => $orders
        ]);
    }

    public function profile($id)
    {
        if (Auth::guard('admin')->user()->admin_id == $id) {
            $adminData = Admins::find($id);
            return view('admin.profile', [
                'adminData' => $adminData
            ]);
        } else {
            return ("You Don't have access");
        }
    }

    public function profileEdit($id, Request $request)
    {
        if (Auth::guard('admin')->user()->admin_id == $id) {
            DB::table('admin')
                ->where('admin_id', '=', $id)
                ->update([
                    'name' => $request->input('adminName'),
                    'email' => $request->input('adminEmail'),
                    'birth' => $request->input('adminBirth'),
                    'phone_number' => $request->input('adminPhone'),
                    'address' => $request->input('adminAddress'),
                    'updated_at' => now(),
                ]);
            return redirect('/admin/profile/'. $id);
        } else {
            return ("You Don't have access");
        }
    }

    public function actionlogout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
