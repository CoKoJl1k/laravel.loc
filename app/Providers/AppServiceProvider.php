<?php

namespace App\Providers;

use App\Models\Comments;
use App\Models\Posts;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Mockery\CountValidator\Exception;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
/*
        $comment = new Comments;
        Posts::creating(function ($post) use ($comment) {
            try {
                $comment->title = 'title';
                $comment->comment = 'comment';
                //$post = Posts::first();
                $comment->posts_id = 1;
                $comment->save();
            } catch (Exception $е) {
                Log::error('Failed adding contact to ThirdPartyService; canceled. ');
                return false; //Отменяет create() Eloquent
            }
        });
*/
    }

}
