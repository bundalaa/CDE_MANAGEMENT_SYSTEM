<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;

class CommentController extends Controller
{
    public function getComments()
    {
        $comment = Comment::all();

        if (REQ::is('api/*'))
            return response()->json(['comment' => $comment], 201);
        //for web route
        return view('welcome',);
    }

    public function getComment($commentId)
    {
        $comment = Comment::find($commentId);

        if (!$comment) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Comment not found']);
        }

        if (REQ::is('api/*'))
            return response()->json(['Comment' => $comment]);

        ///web route
        return view();
    }

    // public function postComment(Request $request)
    // {

    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'description' => 'required',
    //         'commentable_id'=>'commentable_id',
    //         'commentable_type'=>'commentable_type'
    //     ]);
    //     if ($validator->fails()) {
    //         if (REQ::is('api/*'))
    //             return response()->json(['errors' => $validator->errors(),], 400);
    //     }
    //     $comment = new Comment();
    //     $comment->name = $request->input('name');
    //     $comment->description = $request->input('description');
    //     $comment->save();
    //     if (REQ::is('api/*'))
    //         return response()->json(['Comment' => $comment]);
    //     //for web route
    //     return view();
    // }

    public function putComment(Request $request, $commentId)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }

        $comment = Comment::find($commentId);

        if (!$comment) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Comment not found']);
        }

        $comment->update([
            'description' => $request->input('description'),
        ]);

        if (REQ::is('api/*'))
            return response()->json(['Comment' => $comment]);

        //for web route
        return view();
    }

    public function deleteComment($commentId)
    {
        $comment = Comment::find($commentId);

        if (!$comment) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Comment not found']);
        }

        $comment->delete();
        if (REQ::is('api/*'))
            return response()->json(['message' => 'Comment deleted successfully']);

        ///web route
        return view();
    }
}
