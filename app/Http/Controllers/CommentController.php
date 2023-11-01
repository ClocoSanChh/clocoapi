<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentStoreRequest;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return CommentResource::collection($comments);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentStoreRequest $request)
    {
        $comment = Comment::create($request->validated());
        return response()->json([
            'message' => 'Comment Created Successfully',
            'data' => $comment
        ])->setStatusCode(200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $comment = Comment::findOrFail($id);
            return new CommentResource($comment->load('song'));
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(CommentRequest $request, string $id)
    {
        try {
            $comment = Comment::findOrFail($id);
            $comment->update($request->validated());
            return response()->json([
                'message' => 'Artist Updated Successfully',
                'data' => new CommentResource($comment->load('song'))
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
            $comment = Comment::findOrFail($id);
            $comment->delete();
            return response()->json([
                'message' => 'Comment Deleted Successfully'
            ])->setStatusCode(200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }
}
