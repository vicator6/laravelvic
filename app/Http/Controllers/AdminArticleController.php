<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidatePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use PhpParser\Comment;

class AdminArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();

        return view('admin.articles.index')->with(compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $post = Post::findOrFail($id);
            return view('admin.articles.show')->with(compact('post'));
        }catch(\Exception $e) {
            return redirect()->route('admin.articles.index')->with(['erreur' => 'Oooooooppppsssssss !!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post   = Post::find($id);
        $users  = User::all()->lists('name', 'id')  ;

        return view('admin.articles.edit')->with(compact('post', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidatePostRequest $request, $id)
    {
        $post = Post::find($id);

        $post->title   = $request->title;
        $post->content = $request->content;

        $post->update();

        return redirect()->route('admin.articles.show', $post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();


        return redirect()->route('admin.articles.index');
    }


}
