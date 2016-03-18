<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return redirect()->route('articles.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Envoie de Comm en bdd

        $this->validate($request, [
            'content' => 'required|min:5'
        ],
        [
            'content.required' => 'le champ de commentaire est vide!',
            'content.min' => 'le com doit faire 5 caractères MIN!'
        ]);

        $comment = new Comment;

        $comment->user_id  = Auth::user()->id;
        $comment->post_id  = $request->post_id;
        $comment->content  = $request->content;

        $comment->save();

        if(Auth::check() && Auth::user()->admin == 1){
            return redirect()
                ->route('admin.articles.show', $comment->post_id)
                ->with(compact('comment'));
        }

        return redirect()
            ->route('articles.show', $comment->post_id)
            ->with(compact('comment'));



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $postid = Comment::find($id)->post_id;
        $comment = Comment::find($id);

        $comment->delete();

        if(Auth::check() && Auth::user()->admin == 1){
        }
        return redirect()->route('admin.articles.show', $postid);


    }
}
