<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtistStoreRequest;
use App\Http\Requests\ArtistUpdateRequest;
use App\Http\Resources\ArtistResource;
use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::all();
        return response()->json([
            'data' => ArtistResource::collection($artists),
            'count' => count($artists)
        ]);
        return ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArtistStoreRequest $request)
    {
        $artist = Artist::create($request->validated());
        return response()->json([
            'message' => 'Artist Created Successfully',
            'data' => new ArtistResource($artist)
        ])->setStatusCode(200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $artist = Artist::findOrFail($id);
            return new ArtistResource($artist->load('songs', 'comments'));
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArtistUpdateRequest $request, string $id)
    {
        try {
            $artist = Artist::findOrFail($id);
            $artist->update($request->validated());
            return response()->json([
                'message' => 'Artist Updated Successfully',
                'data' => new ArtistResource($artist)
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
            $artist = Artist::findOrFail($id);
            $artist->delete();
            return response()->json([
                'message' => 'Artist Deleted Successfully'
            ])->setStatusCode(200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }
}
