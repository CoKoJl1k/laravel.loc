<?php

namespace App\Http\Controllers;

use App\Jobs\SayHello;
use Illuminate\Http\Request;


class JobController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$job = new App\Jobs\SayHello;
        $job = new SayHello;
        dispatch_now($job);
        //dd($job->handle());

        return view('pages.job',['job' => $job->handle()]);
    }
}
