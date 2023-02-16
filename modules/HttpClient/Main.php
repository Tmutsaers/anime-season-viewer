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
        $anime->ID = $anime_value['mal_id'];
        
        $anime->episodeAmount = $anime_value['episodes'];
        $anime->startDate = explode('T',$anime_value['aired']['from'])[0];
        $anime->endDate = is_null($anime_value['aired']['to']) ? "Still airing/ongoing" : explode('T',$anime_value['aired']['to'])[0];

        $anime->score = $anime_value['score'];
        $anime->rank = $anime_value['rank'];
        $anime->popularity = $anime_value['popularity'];
        $anime->favorites = $anime_value['favorites'];

        $anime->season = $anime_value['season'];
        $anime->year = $anime_value['year'];

        $producers = array();
        foreach($anime_value['producers'] as $producer)
        {
            $producers[] = $producer['name'];
        }
        $anime->producers = $producers;
        
        $studios = array();
        foreach($anime_value['studios'] as $studio)
        {
            $studios[] = $studio['name'];
        }
        $anime->studios = $studios;

        $genres = array();
        foreach($anime_value['genres'] as $genre)
        {
            $genres[] = $genre['name'];
        }
        $anime->genres = $genres;

        $themes = array();
        foreach($anime_value['themes'] as $theme)
        {
            $themes[] = $theme['name'];
        }
        $anime->themes = $themes;

        $demographics = array();
        foreach($anime_value['demographics'] as $demographic)
        {
            $demographics[] = $demographic['name'];
        }
        $anime->demographics = $demographics;

        $streamingSites = array();
        foreach($anime_value['streaming'] as $streamingSite)
        {
            $streamingSites[] = $streamingSite['name'];
        }
        $anime->streamedOn = $streamingSites;

        return $anime;
    }

    public static function processCharactersJSON($animeCharacters): array
    {
        $characterList = array();

        foreach($animeCharacters['data'] as $character => $character_value)
        {
            $character = new Character();
            $character->name = $character_value['character']['name'];
            $character->image = $character_value['character']['images']['jpg']['image_url'];
            $characterList[] = $character;
        }
        return $characterList;
    }
}


?>