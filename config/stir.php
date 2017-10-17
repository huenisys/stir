<?php

return [

    'app_env' => env('APP_ENV'),
    'subdomain' => env('SUBDOMAIN', 'xxx_'.env('APP_ENV')),

    // appears in page title
    'site_brand' => env('SITE_BRAND', 'Huenits'),

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

    'contact_company' => 'Huenits, Inc.',
    'contact_address1' => '1355 Market St, Suite 900',
    'contact_address2' => 'San Francisco, CA 94103',
    'contact_phone' => '(123) 456-7890',
    'contact_person' => 'Support',
    'contact_mail' => 'support@huenits.com',

    'social_facebook' => 'https://www.facebook.com/huenits.web/',
    'social_twitter' => 'https://twitter.com/huenits.web',
    'social_googleplus' => 'https://plus.google.com/+huenits.web',

];
