<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function drinks()
    {
        return $this->hasMany(drink::class, 'category_id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
