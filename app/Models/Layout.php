<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
	use HasFactory;

	public function getCssAttribute()
	{
		$options = json_decode($this->options);
		return $options->root->css;
	}

	public function getBkImageAttribute()
	{
		$options = json_decode($this->options);
		return $options->root->bk_image;
	}

	public function getNumSectionsAttribute()
	{
		$options = json_decode($this->options);
		return $options->root->total_sections;
	}

	public function getNumberOfPrices(Int $section)
	{
		$options = json_decode($this->options, true);
		
		return $options['section' . $section]['num_prices'];
	}

}
