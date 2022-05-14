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

		return view("frontend.layout01", [
			'section01' => Section::find(1),
			'section02' => Section::find(2),
			'section03' => Section::find(3),
			'section04' => Section::find(4),
			'section05' => Section::find(5),
			'section06' => Section::find(6),
			'section07' => Section::find(7),
			'section08' => Section::find(8),
			'section09' => Section::find(9),
			'section10' => Section::find(10),
			'section11' => Section::find(11),
			'section12' => Section::find(12),
			'section13' => Section::find(13),
			'section14' => Section::find(14),
			'section15' => Section::find(15),
			'section16' => Section::find(16),
			'section17' => Section::find(17),
			'section18' => Section::find(18),
			'section19' => Section::find(19),
			'section20' => Section::find(20),
			'section21' => Section::find(21),
			'section22' => Section::find(22),
			'section23' => Section::find(23),
			'section24' => Section::find(24),
			'section25' => Section::find(25),
		]);
	}
}
