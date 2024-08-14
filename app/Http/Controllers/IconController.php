<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Icon;

class IconController extends Controller
{
    //


    public function index()
    {

        $icons = ['test', 'test2'];

        return view('icon.index', compact('icons'));
    }
    public function create()
    {

        return view('icon.create');
    }
    public function store() {}
    public function edit() {}
    public function update() {}
    public function destroy() {}
}
