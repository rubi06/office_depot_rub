<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class OfficeDepotController extends Controller

{
    public function generator()
    {
        //dd('ok');
        return view("frontend.sections", ['sections' => Section::all()]);
    }
    
}
