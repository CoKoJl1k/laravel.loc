<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        // $users = DB::connection('laravel')->select('select * from users');
        //return view('pages.tasks.index')->with('tasks', $users);
        /*
                    $newestContactEmail = DB::table('tasks')
        ->orderBy( 'created_at', 'desc')
        ->value('title');
        dd($newestContactEmail);
        */
       // $chunks = Tasks::all()->chunk(10);
        //return view('pages.tasks.index')->with('tasks', $chunks);
        /*
        $collection = collect([1, 2, 3, 4, 5, 10, 100]);
        $filtered = $collection->reject(function ($value, $key) {
            return $value % 2 === 0 ;
        });
        dd($filtered->all());
*/
        return view('pages.tasks.index')->with('tasks', Tasks::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
        //return 'Hello create';
        return view('pages.tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function store(Request $request)
    {
        Tasks::create(request()->only(['title', 'description','description2']));
/*
        Tasks::create( [
            'title' => $request->title,
            'description' => $request->description,
            'description2' => $request->description2,
        ] ) ;
        */
        return redirect('/tasks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //Tasks::destroy($id);
        DB::table('tasks')->where('id', '=', $id)->delete();
        return redirect()->route('tasks.index');
    }


}
