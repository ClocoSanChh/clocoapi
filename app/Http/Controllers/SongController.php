<?php

namespace App\Http\Controllers;

use App\Http\Requests\SongStoreRequest;
use App\Http\Requests\SongUpdateRequest;
use App\Http\Resources\SongResource;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::all();
        return SongResource::collection($songs);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(SongStoreRequest $request)
    {
        $song = Song::create($request->validated());
        return response()->json([
            'message' => 'Song Created Successfully',
            'data' => new SongResource($song)
        ])->setStatusCode(200);
    }

    public function show(string $id)
    {
        try {
            $song = Song::findOrFail($id);
            return new SongResource($song->load('comments'));
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SongUpdateRequest $request, string $id)
    {
        try {
            $song = Song::findOrFail($id);
            $song->update($request->validated());
            return response()->json([
                'message' => 'Song Updated Successfully',
                'data' => new SongResource($song)
            ])->setStatusCode(200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $song = Song::findOrFail($id);
            $song->delete();
            return response()->json([
                'message' => 'Song Deleted Successfully'
            ])->setStatusCode(200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }
}
