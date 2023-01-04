<?php

namespace Module\HttpClient;


use Module\HttpClient\Anime;
use Module\HttpClient\Weekdays;

class Main 
{
    public static function onlyCreateClient()
    {
        $client = new \GuzzleHttp\Client();
    }


    public static function getString(): string 
    {
        return "The Function Works!";
    }

    public function getTest2($year): array
    {
        $test = array();
        $test[] = $year;
        return $test;
    }

    public static function getTest(): array
    {
        $test = array();
        $test = self::getSeason(2020,"winter");
        return $test;
    }

    public static function getSeasonStatic($year,$season): array
    {        
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', sprintf('https://api.jikan.moe/v4/seasons/%d/%s',$year,$season));
        $data = json_decode(((String)$response->getBody()),true);

        $animeSeason = array();
        $animeSeason = self::processSeasonJSON($data);

        return $animeSeason;
    }

    public function getSeason($year,$season): array
    {        
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', sprintf('https://api.jikan.moe/v4/seasons/%d/%s',$year,$season));
        $data = json_decode(((String)$response->getBody()),true);

        $animeSeason = array();
        $animeSeason = self::processSeasonJSON($data);

        return $animeSeason;
    }

    public function getCurrentSeason(): array
    {
        $client = new \GuzzleHttp\Client();
        // $response = $client->request('GET', 'https://api.jikan.moe/v4/schedules?sfw=true');
        $response = $client->request('GET', 'https://api.jikan.moe/v4/seasons/now');
        $data = json_decode(((String)$response->getBody()),true);

        $animeSeason = array();

        $animeSeason = self::processSeasonJSON($data);

        return $animeSeason;

        return $data['data'];
    }

    public static function processSeasonJSON($jsonArray): array 
    {
        $animeSeason = array();

        foreach($jsonArray['data'] as $anime => $anime_value)
        {
            $anime = new Anime();
            //$anime->name = $anime_value['titles'][0]['title'];
            $anime->name = is_null($anime_value['title_english']) ? $anime_value['title'] : $anime_value['title_english'];
            $anime->image = $anime_value['images']['jpg']['image_url'];
            $anime->description = is_null($anime_value['synopsis']) ? "No description given by MAL." : $anime_value['synopsis'];
            $anime->day = $anime_value['broadcast']['day'];
            $anime->url = $anime_value['url'];
            $animeSeason[] = $anime;
        }

        uasort($animeSeason, function($a, $b) 
        {
            $Weekdays = new Weekdays; 
            $days = $Weekdays->days;
            if($days[$a->day] == $days[$b->day])
            {
                return 0;
            }
    
            return ($days[$a->day] < $days[$b->day]) ? -1 : 1;
        });

        return $animeSeason;
    }
}


?>