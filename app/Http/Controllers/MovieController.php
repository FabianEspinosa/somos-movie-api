<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return response()->json($movies);
    }


    /**
     * Show the specified resource from storage.
     */
    public function show(string $id)
    {
        $movie = Movie::find($id);
        if (!$movie) {
            return response()->json(['error' => 'La película no existe'], 404);
        }
        return response()->json($movie);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate(Movie::$rules);
        if (!$validatedData) {
            return response()->json(['error' => 'La validación ha fallado'], 422);
        }
        $movie = new Movie;
        $movie->fill($validatedData);
        $movie->save();

        return response()->json(['message' => 'La película se ha guardado correctamente']);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->fill($request->all());
        $movie->save();
        return response()->json(['message' => 'La película se ha actualizado correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movie::find($id);
        if (!$movie) {
            return response()->json(['error' => 'La película no existe'], 404);
        }
        $movie->delete();
        return response()->json(['message' => 'La película se ha eliminado correctamente']);
    }
}
