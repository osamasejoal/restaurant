<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';
    protected $guarded = [];




    /*
    |--------------------------------------------------------------------------
    |                          RELATION WITH CUISINE TABLE
    |--------------------------------------------------------------------------
    */
    public function cuisine()
    {
        return $this->belongsTo(Cuisine::class);
    }




    /*
    |--------------------------------------------------------------------------
    |                          RELATION WITH CATEGORY TABLE
    |--------------------------------------------------------------------------
    */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
