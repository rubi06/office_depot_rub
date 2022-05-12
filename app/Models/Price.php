<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
	use HasFactory;
	protected $fillable = ['product', 'price'];

	public function sections()
	{
		return $this->belongsToMany(Section::class);
	}
}
