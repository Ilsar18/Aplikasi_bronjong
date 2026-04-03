<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Visitor;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Mengirim data statistik ke semua view (termasuk footer)
        View::composer('*', function ($view) {
            $view->with([
                'online_users'     => Visitor::where('last_seen', '>=', now()->subMinutes(5))->count(),
                'today_visits'    => Visitor::where('visit_date', now()->toDateString())->count(),
                'yesterday_visits' => Visitor::where('visit_date', now()->subDay()->toDateString())->count(),
                'month_visits'     => Visitor::where('visit_date', '>=', now()->subDays(30))->count(),
            ]);
        });
    }
}