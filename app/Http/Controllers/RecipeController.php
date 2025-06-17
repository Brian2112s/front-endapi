<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;


class RecipeController extends Controller
{

    public function index(){
        $recipes = Recipe::all();
        return $recipes;
    }

    public function categoryrecipes($id){
        $recipes = Recipe::where('category_id', $id)->get(['id','recipe_name', 'image']);
        
        $recipes = $recipes->map(function ($recipe) {
            return [
                'id' => $recipe->id,
                'recipe_name' => $recipe->recipe_name,
                'image' => $recipe->image ? asset($recipe->image) : null,            ];
        });
        
        return $recipes;
    }

    public function show($id){
        $recipe = Recipe::findOrFail($id);
        
        $recipeData = $recipe->toArray();
        $recipeData['image'] = $recipe->image ? asset($recipe->image) : null;
        
        return $recipeData;
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
        if ($request->filled('difficulty')) {
            $query->where('difficulty', '=', $request->input('difficulty'));
        }

        $results = $query->get();

        return $results;
    }
}
