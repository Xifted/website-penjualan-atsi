<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LangController extends Controller
{
    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        if ($request->prev) {
            return redirect()->to(url()->previous() . '#' . $request->prev);
        }

        return redirect()->back();
    }
}
