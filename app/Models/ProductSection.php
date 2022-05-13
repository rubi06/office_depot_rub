<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSection extends Model
{
    use HasFactory;
    protected $fillable = ['section_id', 'product_id'];

    public function sections()
	{
		return $this->belongsToMany(Section::class);
	}

    
}
