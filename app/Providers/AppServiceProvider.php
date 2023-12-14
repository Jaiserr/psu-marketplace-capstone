<?php

namespace App\Providers;

use App\Models\ApprovalNotification;
use App\Models\ProductCreationNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('approval_notifications')) {
            View::composer('*', function ($view) {
                if (Auth::check()) {
                $notifications = ApprovalNotification::where('user_id', Auth::user()->id)->get();
                $newProductNotifications = ProductCreationNotification::where('user_id', 2)->latest()->get();
                $view->with('notifications', $notifications)
                ->with('newProductNotifications', $newProductNotifications);
                }
            });
        }
    }
}
