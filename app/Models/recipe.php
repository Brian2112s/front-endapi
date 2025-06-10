<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class Recipe extends Model
{
    protected $table = 'recipes';

    protected $fillable = [
        'recipe_name',
        'category_id',
        'ingredients',
        'nutritional_values',
        'difficulty',
        'preparation_time',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
