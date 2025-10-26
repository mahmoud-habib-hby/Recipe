<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeRequest;
use App\Models\Recipe;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes=Recipe::all();
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recipes.create');
    }

 
public function store(RecipeRequest $request)
{
    Recipe::create($request->validated());
    return redirect()->route('recipes.index');
}



    public function show(string $id)
    {
        $recipe=Recipe::find($id);
        return view('recipes.show',compact('recipe'));

    }

    public function edit(string $id)
    {
        $recipe=Recipe::find($id);
        return view('recipes.edit',compact('recipe'));
        
    }

    public function update(RecipeRequest $request, string $id)
    {
        $recipe=Recipe::find($id);
        $recipe->update($request->validated());
        return redirect()->route('recipes.index');
    }

    public function destroy(string $id)
    {
        $recipe=Recipe::find($id);
        $recipe->delete();
        return redirect()->route('recipes.index');
        
    }
}
