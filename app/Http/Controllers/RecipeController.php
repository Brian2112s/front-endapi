<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;


class RecipeController extends Controller
{

public function index(Request $request)
{
    $limit = $request->input('limit', 9); // standaard 20
    $recipes = Recipe::paginate($limit);

    return response()->json($recipes);
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

        if ($request->has('recipe_name')) {
            $query->where('recipe_name', 'LIKE', '%' . $request->recipe_name . '%');
        }

        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->has('ingredients')) {
            $query->where('ingredients', 'LIKE', '%' . $request->ingredients . '%');
        }

        if ($request->has('difficulty')) {
            $query->where('difficulty', strtolower($request->difficulty)); 
        }

        if ($request->has('min_preparation_time')) {
            $query->where('preparation_time', '>=', $request->min_preparation_time);
        }

        if ($request->has('max_preparation_time')) {
            $query->where('preparation_time', '<=', $request->max_preparation_time);
        }

        $limit = $request->input('limit', 20);
        $recipes = $query->paginate($limit);

        return response()->json($recipes);
    }
}
