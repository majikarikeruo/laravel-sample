<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * トップページ
     * 一旦全表示設定
     */
    public function index()
    {
        $icons = Icon::all();

        return view('index', compact('icons'));
    }

    public function download(Request $request)
    {
        $filename = $request->filename;
        return response()->download(public_path('storage/' . $filename));
    }
}
