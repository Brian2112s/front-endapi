<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
     protected $table = 'categorieën';

        protected $fillable = [
        'category_name',
    ];

    public function recepten()
    {
        return $this->hasMany(Recept::class);
    }
}
