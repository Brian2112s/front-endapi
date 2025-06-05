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

    public function show($id){
        $recipe = Recipe::findOrFail($id);
        return $recipe;
    }

     public function search(Request $request)
    {
        $query = Recipe::query();

        if ($request->filled('ingredients')) {
            $query->where('ingredients', 'LIKE', '%' . $request->input('ingredients') . '%');
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        if ($request->filled('recipe_name')) {
            $query->where('recipe_name', 'LIKE', '%' . $request->input('recipe_name') . '%');
        }

        if ($request->filled('preparation_time')) {
            $query->where('preparation_time', '<=', $request->input('preparation_time'));
        }

        $results = $query->get();

        return $results;
    }
}
