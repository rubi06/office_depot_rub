<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Section;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view("backend.dashboard", ['products' => Product::all()]);
    }
}
 