<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{

    public function index()
    {
         $recipes = Recipe::all();
        return response()->json([
            'message' => 'All favourites retrieved successfully',
            'data'    => $recipes
        ]);       
    }


    public function store(Request $request)
    {
        $recipe = Recipe::create($request->all());
        return response()->json([
            'message' => 'Recipe created successfully'
           
        ], 201); 
    }

  
    public function show(string $id)
    {
        $recipe = Recipe::find($id);

        if (!$recipe) {
            return response()->json(['message' => 'Instructor not found'], 404);
        }

        return response()->json([
            'message' => 'Instructor retrieved successfully',
            'data'    =>  $recipe
        ]);
    }


    public function update(Request $request, string $id)
    {
        $recipe = Recipe::find($id);
        $recipe->update($request->all());

        return response()->json([
            'message' => 'Recipe retrieved successfully'
        ]);
    }

    public function destroy(string $id)
    {
        $recipe = Recipe::find($id);
        $recipe->delete();
        return response()->json([
            'message' => 'Recipe retrieved successfully'
        ]);
    }
}
