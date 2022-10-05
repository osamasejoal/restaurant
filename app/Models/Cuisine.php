<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model
{
    use HasFactory;
    
    protected $guarded = [];




    /*
    |--------------------------------------------------------------------------
    |                        RELATION WITH FOOD TABLE
    |--------------------------------------------------------------------------
    */
    public function food()
    {
        return $this->hasOne(Food::class);
    }
}
