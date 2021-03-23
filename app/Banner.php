<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use SoftDeletes;
	protected $table = 'banners';

    protected $fillable = ['name', 'text_style','sort_order','content','link','status'];

    protected $with = [];

    protected $fillable = [];

    public function products(){
    	return $this->hasMany(Product::class);
    }

}
