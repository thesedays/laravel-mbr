<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enable this package
    |--------------------------------------------------------------------------
    |
    | Define if this package should be enabled.
    | You can set this setting to false when for example building up the form
    | and testing the logic for your campaign, so that the crm is not spammed
    |
    */

    'enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services your application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | API Key
    |--------------------------------------------------------------------------
    |
    | The api key used to connect to the crm.
    |
    |
    |
    */

    'key' => env('MBR_API_KEY', null),

    /*
    |--------------------------------------------------------------------------
    | Campaign
    |--------------------------------------------------------------------------
    |
    | The id of the created campaign within the MBR CRM.
    |
    |
    |
    */

    'campaign' => 'your-campaign-id-here',

    /*
    |--------------------------------------------------------------------------
    | CRM endpoints
    |--------------------------------------------------------------------------
    |
    | An array containing a base url for each application environment.
    |
    |
    |
    */

    'endpoints' => [
        'dev' => 'http://endpoint.be/',
        'production' => 'https://endpointproduction.be/'
    ],

    /*
    |--------------------------------------------------------------------------
    | CRM fields
    |--------------------------------------------------------------------------
    |
    | An array that holds all the fields
    | that are available in the crm.
    |
    |
    */

    'fields' => [
        'salutation', 'first_name', 'last_name', 'primary_address_country', 'primary_address_postalcode',
        'primary_address_street', 'primary_address_city', 'primary_address_state', 'email1', 'phone_work',
        'dateofbirth_c', 'language_preferences_c', 'boss_motoring_interests_c', 'gender_c', 'lead_source',
        'twitter_username_c', 'facebook_username_c', 'bridgestone_pref_channel_c', 'first_opt_in',
        'third_party_pref_channel_c', 'third_party_opt_in_c', 'campaign_id',
    ],
];
