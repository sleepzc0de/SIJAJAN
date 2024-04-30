<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;
    
    protected $guarded =['id'];

    // protected $with = ['category'];

    // public function scopeFilter($query, array $filters)
    // {
    //     $query->when($filters['search'] ?? false, function($query, $search){
    //         return $query->where('name','like','%'. $search .'%')
    //                     ->orWhere('name','like','%'. $search .'%');
    //     });

    //     $query->when($filters['category'] ?? false, function($query, $category){
    //         return $query->whereHas('category', function($query) use ($category){
    //             $query->where('slug', $category);
    //         });
    //     });

    //     $query->when($filters['drink'] ?? false, function($query, $drinks){
    //         return $query->whereHas('drink', function($query) use ($drinks){
    //             $query->where('name', $drinks);
    //         });
    //     });

    // }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    
}
