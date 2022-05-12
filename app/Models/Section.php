<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
	use HasFactory;
	protected $fillable = ['name', 'description'];

	public function prices()
	{
		return $this->belongsToMany(Price::class);
	}

	public function stores()
	{
		return $this->belongsToMany(Store::class);
	}
}
