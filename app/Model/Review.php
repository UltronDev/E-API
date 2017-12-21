<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $fillable = ['product_id', 'customer', 'review', 'review'];
    public function products()
    {
    	return $this->belongsTo(Product::class);
    }
}
