<?php

namespace App\Http\Controllers;

use App\Models\Greeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GreateengController extends Controller
{
    public function index(){
        //$greetings = Greeting::all();
        //$greetings = DB::table('greetings')->get();
        //$countRow = DB::select('select count(*) as countRow from greetings');
        $greetings = DB::select('select * from greetings order by id desc');
        return  view('pages.data', ['greetings' => $greetings]);
    }
}
