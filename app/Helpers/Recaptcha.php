<?php

namespace App\Helpers;

class Recaptcha
{
    public static function check($token) : bool
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';

        $data = [
            'secret' => config('app.recaptcha.secret'),
            'response' => $token,
            'remoteip' => request()->ip()
        ];

        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        return json_decode($result)->success;
    }
}
