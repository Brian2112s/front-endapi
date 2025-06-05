<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;


class RecipeController extends Controller
{
    public function index($id){
        $recipes = Recipe::where('category_id', $id)->get();
        return $recipes;
    }
}
