<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function __invoke(Request $request)
    {
        return view('pages.home', [
            'categories' => JobCategory::all()
        ]);
    }
}
