<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Feature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $data['features'] = Feature::all();
        return view('frontend.index', $data);
    }
}
