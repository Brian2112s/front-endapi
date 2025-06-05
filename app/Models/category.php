<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Recipe;


class Category extends Model
{
     protected $table = 'categorieën';

        protected $fillable = [
        'category_name',
    ];

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
}
