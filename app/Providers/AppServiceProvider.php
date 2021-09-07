<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Site;
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
    //     $site_data = Site::find(1);
    //     $contact = Contact::findOrFail(1);
    //     define('SITE_TITLE',$site_data->title, TRUE);
    //     define('SITE_EMAIL',$contact->email, TRUE);
    //     define('SITE_DESCRIPTION', $site_data->description, TRUE);
    //     define('SITE_MD_PROFILE', $site_data->md_profile, TRUE);
    //     define('SITE_QUOATION', $site_data->foter_quoation, TRUE);
    //     define('SITE_MESSAGE_FROM_MD', $site_data->message, TRUE);
    //     define('SITE_LOGO', $site_data->logo, TRUE);
    //     define('SITE_LOCATION', $site_data->location, TRUE);
    //     define('SITE_ADDRESS', $site_data->addres, TRUE);
    //     define('SITE_CONTACT', $contact->contact, TRUE);
    //     // define('SITE_META_TITLE',$site_data->seo_title, TRUE);
    //     // define('SITE_META_KEYWORDS',$site_data->seo_keywords, TRUE);
    //     // define('SITE_META_DESCRIPTION',$site_data->seo_description, TRUE);
    //     define('SITE_MAIL_EMAIL','haripoudyal4@gmail.com', TRUE);
    //     View::share('site_data', $site_data);
    // }
}
