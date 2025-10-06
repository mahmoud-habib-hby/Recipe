<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FavouriteRequest;
use App\Models\Favourite;

class FavouriteController extends Controller
{
    public function index()
    {
        $favourites = Favourite::all();
        return response()->json([
            'message' => 'All favourites retrieved successfully',
            'data'    => $favourites
        ]);
    }

public function store(FavouriteRequest $request)
{
    $request->validate([
        'device_id' => 'required|string',
        'recipe_id' => 'required|exists:recipes,id', 
    ]);

    $favourite = Favourite::create([
        'device_id' => $request->device_id,
        'recipe_id' => $request->recipe_id,
    ]);

    return response()->json([
        'message' => 'Favourite created successfully',
        'data'    => $favourite
    ], 201);
}


    public function show($id)
    {
        $favourite = Favourite::find($id);
        if (!$favourite) {
            return response()->json(['message' => 'Favourite not found'], 404);
        }
        return response()->json([
            'message' => 'Favourite retrieved successfully',
            'data'    => $favourite
        ]);
    }

public function update(FavouriteRequest $request, $id)
{
    $favourite = Favourite::find($id);

    if (!$favourite) {
        return response()->json(['message' => 'Favourite not found'], 404);
    }

    $request->validate([
        'device_id' => 'sometimes|string',
        'recipe_id' => 'sometimes|exists:recipes,id',
    ]);

    $favourite->update($request->only(['device_id', 'recipe_id']));

    return response()->json([
        'message' => 'Favourite updated successfully',
        'data'    => $favourite
    ]);
}

public function destroy($id)
{
    $favourite = Favourite::find($id);

    if (!$favourite) {
        return response()->json(['message' => 'Favourite not found'], 404);
    }

    $favourite->delete();

    return response()->json([
        'message' => 'Favourite deleted successfully'
    ]);
}

}
