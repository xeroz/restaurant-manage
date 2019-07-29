<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Menu extends Model
{
    protected $table = 'menus';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
