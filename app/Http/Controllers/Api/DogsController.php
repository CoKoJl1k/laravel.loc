<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Http\Resources\DogsResource;
use App\Jobs\CrunchReports;
use App\Jobs\SayHello;
use App\Models\Dogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;


class DogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return DogsResource
     */
    public function index()
    {
/*
        $message = 'Message my message!!!!!' ;
        Log::emergency($message);
        Log::alert($message);
        Log::critical($message);
        Log::error($message);
        Log::warning($message);
        Log::notice($message);
        Log::info($message);
        Log::debug($message);
*/
        //$dogs = Dogs::all();
        //Log::error('Failed to upload user image. ', ['dogs' => $dogs]);
        //return Storage::download('myFile.pdf');

        //$user = auth()->user();
        //$daysToCrunch = 7;
        //$delay = now()->addMinute(1);
        //CrunchReports::dispatch($user)->delay($delay);
        //CrunchReports::dispatch($user,$daysToCrunch);

        /*
        $delay = now()->addMinute(1);
        CrunchReports::dispatch()-> delay($delay);
        */
        dispatch(new SayHello());

        return view('pages.dogs.index')->with('dogs', DB::table('dogs')->paginate(4));

       // return view('pages.dogs.index')->with('dogs', DogsResource::all());
       // return view('pages.dogs.index')->with('dogs', DogsResource::paginate(4));

        // return response(DogsResource::all())->header('X-Greatness-Index', 12);

       //return new DogsResource(Dogs::all());
        //return DogsResource::all();
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
        //
        $dog = Dogs::findOrFail($id);

        return view('pages.dogs.show')->with('dog', $dog);

       //return DogsResource::findOrFail($id);
       // return redirect()->route('dogs.index');
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
        $dog = Dogs::findOrFail($id);
        $dog->update($request->only(['name', 'breed']));
       // return $dog;

        return redirect()->route('dogs.index');

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
        Dogs::findOrFail($id)->delete();

        return redirect()->route('dogs.index');
    }
}
