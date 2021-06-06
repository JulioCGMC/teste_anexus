<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Common;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $roots = Common::whereNull('indicator')->get();
        return view('admin.all.index', compact('roots'));
    }

    public function show($id)
    {
        $common = Common::find($id);
        return view('show.index', compact('common'));
    }
}
