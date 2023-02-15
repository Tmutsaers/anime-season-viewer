<?php

namespace Module\HttpClient;


use Module\HttpClient\Anime;
use Module\HttpClient\AnimeDetail;
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
            $anime->ID = $anime_value['mal_id'];
            $animeSeason[] = $anime;
        }

        if(is_null($animeSeason[0]->day) === true)
        {
            return $animeSeason;
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

    public static function processJSON($jsonArray) : array
    {
        $animeList = array();

        // var_dump($jsonArray);

        foreach($jsonArray['data'] as $anime => $anime_value)
        {
            $anime = new Anime();
            $anime->name = is_null($anime_value['title_english']) ? $anime_value['title'] : $anime_value['title_english'];
            $anime->image = $anime_value['images']['jpg']['image_url'];
            $anime->description = is_null($anime_value['synopsis']) ? "No description given by MAL." : $anime_value['synopsis'];
            $anime->url = $anime_value['url'];
            // $anime->ID = $anime_value['mal_id'];
            $animeList[] = $anime;
        }
        return $animeList;
    }

    public static function processAnimeDetailJSON($animeDetail) 
    {
        $anime_value = $animeDetail['data'];
        $anime = new AnimeDetail();
        $anime->ENname = is_null($anime_value['title_english']) ? $anime_value['title'] : $anime_value['title_english'];
        $anime->JPname = is_null($anime_value['title_japanese']) ? $anime_value['title'] : $anime_value['title_japanese'];
        $anime->thumbnail = $anime_value['images']['jpg']['image_url'];
        $anime->description = is_null($anime_value['synopsis']) ? "No description given by MAL" : $anime_value['synopsis'];
        $anime->url = $anime_value['url'];
        $anime->day = is_null($anime_value['broadcast']) ? "No day given" : $anime_value['broadcast']['day'];
        return $anime;
    }
}


?>