<?php

namespace App\Http\Controllers;

use App\Models\Layout;
use App\Models\Product;
use App\Models\Section;
use Illuminate\Http\Request;

class OfficeDepotController extends Controller

{
	public function generator()
	{
		$layout = Layout::find(1);

		return view("frontend.sections", [
			'section01' => Section::find(1),
			'section02' => Section::find(2),
		]);
	}
}
