<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuPopular extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    

    public function drink()
    {
        return $this->belongsTo(Drink::class);
    }
}
