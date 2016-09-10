<?php

    function load_asset($asset_url)
    {
        return (env('APP_ENV') === 'production') ? secure_asset($asset_url) : asset($asset_url);
    }

       function site_name()
       {
           $settings = \App\Settings::first();

           $site_name = $settings->site_name;

           return $site_name;
       }

       function site_url()
       {
           $settings = \App\Settings::first();

           $site_url = $settings->site_url;

           return $site_url;
       }

       function email_from()
       {
           $settings = \App\Settings::first();

           $email_from = $settings->email_from;

           return $email_from;
       }

       function email_to()
       {
           $settings = \App\Settings::first();

           $email_to = $settings->email_to;

           return $email_to;
       }
