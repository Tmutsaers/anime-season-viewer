<?php

namespace Module\HttpClient;

class Main {

    public static function getString(): string 
    {
        return "The Function Works!";
    }

    public static function testJSON(): array
    {
        $client = new \GuzzleHttp\Client();
        // $response = $client->request('GET', 'https://api.jikan.moe/v4/schedules?sfw=true');
        $response = $client->request('GET', 'https://api.jikan.moe/v4/seasons/now');
        $data = json_decode(((String)$response->getBody()),true);

        return $data['data'];
    }

} ?>