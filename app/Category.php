<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use SoftDeletes;
	protected $table = 'categories';

    protected $fillable = ['title', 'parent_id','status'];

    protected $with = [];
}
