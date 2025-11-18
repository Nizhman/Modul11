<?php

namespace App\Http\Controllers;

use App\Models\sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    // Get all posts
    public function index()
    {
        return sensor::all();
    }

    // Create a new post
    public function store(Request $request)
    {
        $request->validate([
            'nama_lokasi' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'lattitude' => 'required|max:255',
            'longitude' => 'required|max:255',
        ]);
        
        return sensor::create($request->all());
    }

    // Get a single post by ID
    public function show($id)
    {
        return sensor::find($id);
    }

    // Update a post by ID
    public function update(Request $request, $id)
    {
        $post = sensor::find($id);

        $request->validate([
            'nama_lokasi' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'lattitude' => 'required|max:255',
            'longitude' => 'required|max:255',
        ]);
        
        $post->update($request->all());

        return $post;
    }

    // Delete a post by ID
    public function destroy($id)
    {
        return sensor::destroy($id);
}
}