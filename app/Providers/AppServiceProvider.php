<?php

namespace App\Providers;

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
        // $site_data = Site::find(1);
        // define('SITE_TITLE',$site_data->title, TRUE);
        // define('SITE_EMAIL',$site_data->email, TRUE);
        // define('SITE_META_TITLE',$site_data->seo_title, TRUE);
        // define('SITE_META_KEYWORDS',$site_data->seo_keywords, TRUE);
        // define('SITE_META_DESCRIPTION',$site_data->seo_description, TRUE);
        // define('SITE_MAIL_EMAIL','haripoudyal4@gmail.com', TRUE);
        // View::share('site_data', $site_data);
    }
}
