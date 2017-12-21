<?php

namespace Stir\Rules;

use Illuminate\Contracts\Validation\Rule;
use GuzzleHttp\Client as HttpClient;

class Grecaptcha implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $client = new HttpClient();

        $response = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
              'secret' => config('stir.gcapsecret'),
              'response' => $value
            ]
        ]);

        return json_decode($response->getBody()->getContents())->success;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Google Recaptcha thinks you\'re a robot, sorry';
    }
}
