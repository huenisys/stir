<?php

return [

    'app_env' => env('APP_ENV'),
    'subdomain' => env('SUBDOMAIN', 'xxx_'.env('APP_ENV')),

    // appears in page title
    'site_brand' => env('SITE_BRAND', 'Site'),

    'home_heading' => 'Build awesome sites fast',
    'home_tagline' => 'Huenits.com empowers you to build your stunning website in seconds. Easy and free.',
    'home_button_text' => 'Create Now',

    'menu1_links' => [
      'Features' => '/features',
      'FAQs' => '/faqs',
      'Contact' => '/contact',
    ],

    'menu2_links' => [
      'Terms and Privacy' => '/terms-and-privacy'
    ],

    'contact_company' => 'Site, Inc.',
    'contact_address1' => '1355 Market St, Suite 900',
    'contact_address2' => 'San Francisco, CA 94103',
    'contact_phone' => '(123) 456-7890',
    'contact_person' => 'Support',
    'contact_mail' => 'support@site.com',

    'social_facebook' => 'https://www.facebook.com/site.web/',
    'social_twitter' => 'https://twitter.com/site.web',
    'social_googleplus' => 'https://plus.google.com/+site.web',

    'notifier_to' => env('STIR_NTFR_TO'),
    'notifier_cc' => env('STIR_NTFR_CC'),


];
