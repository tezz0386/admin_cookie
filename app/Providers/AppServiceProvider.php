<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Site;
use Illuminate\Support\Facades\View;
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
        $site_data = Site::find(1);
        $contact = Contact::findOrFail(1);
        $category = Category::with('subCategories')->get();
        define('SITE_TITLE',$site_data->site_title);
        define('SITE_EMAIL',$contact->email);
        define('SITE_DESCRIPTION', $site_data->description);
        define('SITE_MD_PROFILE', $site_data->md_profile);
        define('SITE_QUOATION', $site_data->foter_quoation);
        define('SITE_MESSAGE_FROM_MD', $site_data->message);
        define('SITE_LOGO', $site_data->logo);
        define('SITE_LOCATION', $site_data->location);
        define('SITE_ADDRESS', $site_data->address);
        define('SITE_CONTACT', $contact->contact);
        define('SITE_FACEBOOK', $contact->facebook_link);
        // define('SITE_META_TITLE',$site_data->seo_title, TRUE);
        // define('SITE_META_KEYWORDS',$site_data->seo_keywords, TRUE);
        // define('SITE_META_DESCRIPTION',$site_data->seo_description, TRUE);
        define('SITE_MAIL_EMAIL','dangaura.tejendra.123@gmail.com');
        View::share(['site_data'=>$site_data, 'navCategory'=>$category]);
    }
}
