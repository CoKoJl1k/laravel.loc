<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    /*
    public function index($id){

        $user = DB::select('select * from users where id = :id', [":id" => $id]);
        return  view('pages.users', ['user' => $user]);
    }*/

    // \App\Http\Controllers\UserController.php
    /*
    public function __invoke(User $user)
    {

        return 'user';
    // Обновить изображение на аватаре пользователя
    }*/

    public function __invoke($id)
    {
        //dd($id);
        $user = DB::select('select * from users where id = :id', [":id" => $id]);
        //dd($user);
        return  view('pages.users', ['user' => $user]);
       // return view('pages.users', ['user' => User::findOrFail($id)]);
    }
}
