<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Information;
use App\Models\Portfolio;
use App\Models\Seo;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //s
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data = User::all();
        View::share('users', $data);

        $data = Seo::all();
        View::share('seos', $data);

        $data = About::all();
        View::share('abouts', $data);
        
        $data = Information::all();
        View::share('information', $data);

        $data = Skill::all();
        View::share('skills', $data);

        $data = Portfolio::all();
        View::share('porfolios', $data);

        $data1 = DB::table('resumes')->where('Category', 'Education')->get();
        View::share('resumes1', $data1);

        $data2 = DB::table('resumes')->where('Category', 'Pofessional Experience')->get();
        View::share('resumes2', $data2);
    }
}
