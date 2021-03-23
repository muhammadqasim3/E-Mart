<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Product;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use SoftDeletes;
	protected $table = 'categories';

    protected $fillable = ['title', 'parent_id','status'];

    protected $with = [];

    public function products(){
    	return $this->hasMany(Product::class);
    }

    public function categories(){
    	return $this->hasMany(Category::class);
    }

}
