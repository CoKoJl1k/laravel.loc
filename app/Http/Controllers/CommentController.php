<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Object_;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return response()->file( 'myFile.pdf');
        //return response()->make('HeLLo, WorLd!');
        return view('pages.comments.index')->with('comments', Comments::all());
        //return view('pages.comments.index',['comments' => Comments::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.comments.create');
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

        $comment = new Comments;
        $comment->title = $request->title;
        $comment->comment = $request->comment;

        $post = Posts::first();
        $comment->posts_id = $post->id;

        $comment->save();

        /*
        $comment = new Comments;
        $comment->fill(array(
            'title'  => 'A title',
            'comment' => 'An author'
        ));
        $comment->save();
*/
        return redirect()->route('comments.index');
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
        DB::table('comments')->where('id', '=', $id)->delete();
        return redirect()->route('comments.index');
    }
}
