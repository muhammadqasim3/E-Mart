<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Category;

class Product extends Model
{
	use SoftDeletes;
	protected $table = 'products';

    protected $fillable = ['name', 'code', 'color', 'description', 'price', 'image', 'status'];

    protected $with = [];

    public function categories(){
    	return $this->hasMany(Category::class);
    }
}
