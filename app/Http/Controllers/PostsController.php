<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Tasks;
use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $posts = Posts::cursor()->filter(function ($post) {
            return $post->id <3;
        });
        $posts = Posts::cursor();
*/
        /*
        foreach ($posts as $post) {
            //echo dump($post->text);
           echo '<pre>'; echo($post->text);echo '</pre>';
        }
*/
/*
        $posts = Posts::first();
        $comments = $posts->comments;
        dd($comments);
*/
        //$comments = Posts::find(1)->comments;
        //$comments = Posts::where('comments_id', 1);
        //$comment = Posts::find(2)->get();
        //$posts = Posts::find(1)->comments;
        $posts = Posts::with('comments')->get();

        //$comments = Posts::find(1)->comments;
       // dd($posts);

        return view('pages.posts.index')->with('posts', $posts);


        return view('pages.posts.index')->with('posts', Posts::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->json());
        //dd($request->input('title'));
        //Posts::create(request()->only(['post-text']));
        Posts::create( [
            'title' => $request->title,
           'post' => $request->post,
        ]);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        DB::table('posts')->where('id', '=', $id)->delete();
        return redirect()->route('posts.index');
    }
}
