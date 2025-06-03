<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    protected $table = 'recepten';

    protected $fillable = [
        'recipe_name',
        'category_id',
        'ingredients',
        'nutritional_values',
        'difficulty',
        'preparation_time',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
