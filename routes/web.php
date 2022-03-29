<?php


use App\Http\Controllers\CommentController;
use App\Http\Controllers\GreateengController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MySampleResourceController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UserController;
use App\Models\Greeting;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;

use App\Providers\AppServiceProvider;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome2');
});
*/
//Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
//Route::get('/', 'WelcomeController@index');
/*
Route::get('/', function(){
    return View::make('pages.home');
});
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('about', function() {
    return View::make('pages.about');
});
Route::get('projects', function() {
    return View::make('pages.projects');
});
Route::get('contact', function() {
    return View::make('pages.contact');
});

Route::get('create-greeting', function()
{
    $greeting = new Greeting;
    $greeting->body = 'Hello, World!';
    $greeting->save();

    return View::make('pages.create');
});

Route::get('first-greeting', function () {
    $bodyFirstRow = Greeting::first()->body;
    $bodyFirstRow = Greeting::first()->body;
    return  view('pages.firstrow', ['bodyFirstRow' => $bodyFirstRow]);
});

Route::get('/all-greeting', [GreateengController::class, 'index']);

//Route::get('users/{id}/friends', [UserController::class, 'index']);
//Route::get('users/{user}/friends', [UserController::class]);
//Route::get('users/{user}/friends', ['UserController']);

//Route::get('users/{id}', 'UserController');
Route::get('users/{id}', UserController::class);

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return 'dashboard';
    });
    Route::get('users', function () {
        return 'dashboard/users';
    });
});


/*
Route::fallback(function () {
    abort(404);
    //return 'fallback';
});
*/

/*
Route::get('tasks', [TasksController::class, 'index']);
//Route::post('tasks/store', [TasksController::class, 'store']);
Route::match(['get', 'post'], 'tasks/store', [TasksController::class, 'store']);
Route::get('tasks/create', [TasksController::class, 'create']);
Route::get('tasks/{id}', [TasksController::class, 'destroy']);
*/

Route::resource('tasks', TasksController::class);

Route::apiResource ( 'sample', MySampleResourceController::class );
//Route::post ( 'post', [PostsController::class, 'store'] );
Route::resource('posts', PostsController::class);
Route::resource('comments', CommentController::class);

//Route::get('job', JobController::class);
Route::get('job', [JobController::class, 'index'])->name('job');


Route::get('test-artisan', function () {
    $exitCode = Artisan::call('post:newpost');
    var_dump($exitCode);
})->name('test-artisan');

Route::get('test1', function () {
 echo 'hello';
})->name('test1');


