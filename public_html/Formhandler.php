<?php

namespace Module\HttpClient;


require '..\modules\HttpClient\Weekdays.php';
require '..\modules\HttpClient\Main.php';
require '..\modules\HttpClient\Anime.php';

// $year = $_POST["year"];
// $season = $_POST["season"];

class Handler
{
    public static $FILES_PATH = ".\\files";

    public static function handleGet(): array
    {
        $readFile = file_get_contents(self::$FILES_PATH . '\animeSeason.txt');
        $processed = main::processSeasonJSON(json_decode($readFile,true));
        return $processed;
    }

    public static function handlePost($Post): array
    {
        // if(file_exists(self::$FILES_PATH . '\animeSeason.txt') === false)
        // {
        //     $year = $Post['year'];
        //     $season = $Post['season'];

        //     $cUrlConnection = curl_init();

        //     curl_setopt($cUrlConnection, CURLOPT_URL, 'https://api.jikan.moe/v4/seasons/'.$year.'/'.$season);
        //     curl_setopt($cUrlConnection, CURLOPT_RETURNTRANSFER, true);

        //     $answer = curl_exec($cUrlConnection);
        //     curl_close($cUrlConnection);

        //     file_put_contents(self::$FILES_PATH . '\animeSeason.txt', $answer);
        // }
        // $readFile = file_get_contents(self::$FILES_PATH . '\animeSeason.txt');

        $year = $Post['year'];
        $season = $Post['season'];

        $cUrlConnection = curl_init();

        curl_setopt($cUrlConnection, CURLOPT_URL, 'https://api.jikan.moe/v4/seasons/'.$year.'/'.$season);
        curl_setopt($cUrlConnection, CURLOPT_RETURNTRANSFER, true);

        $answer = curl_exec($cUrlConnection);
        curl_close($cUrlConnection);

        $processed = main::processSeasonJSON(json_decode($answer,true));
        return $processed;
    }

    public static function handlePostGenre($Post): array
    {
        $genreID = $Post['genre'];

        $cUrlConnection = curl_init();

        curl_setopt($cUrlConnection, CURLOPT_URL, 'https://api.jikan.moe/v4/anime?genres='. $genreID);
        curl_setopt($cUrlConnection, CURLOPT_RETURNTRANSFER, true);

        $answer = curl_exec($cUrlConnection);
        curl_close($cUrlConnection);

        $processed = main::processJSON(json_decode($answer,true));
        return $processed;
    }

    function createSearchQuery($post = array()) : string
    {
        $query = "";
        foreach($post as $param => $value)
        {
            if(strcasecmp($param,"page") == 0)
            {
                continue;
            }
            if($value == "")
            {
                continue;
            }

            $query .= "&".$param."=".$value;
        }
        return $query;
    }

    public static function handlePostSearch($Post): array
    {
        // $name = $Post['searchText'];
        $query = self::createSearchQuery($Post);
        // var_dump($query);

        $cUrlConnection = curl_init();

        // curl_setopt($cUrlConnection, CURLOPT_URL, 'https://api.jikan.moe/v4/anime?sfw=true&q='. $name);
        curl_setopt($cUrlConnection, CURLOPT_URL, 'https://api.jikan.moe/v4/anime?sfw=true'.$query);
        curl_setopt($cUrlConnection, CURLOPT_RETURNTRANSFER, true);

        $answer = curl_exec($cUrlConnection);
        curl_close($cUrlConnection);

        $processed = main::processJSON(json_decode($answer,true));
        return $processed;
    }

    public static function handleGetFullAnime($Post)
    {
        $animeID = $Post['animeID'];

        $answer = self::makeWebRequest('https://api.jikan.moe/v4/anime/' . $animeID . '/full');

        $processed = main::processAnimeDetailJSON(json_decode($answer,true));

        $character_answer = self::makeWebRequest('https://api.jikan.moe/v4/anime/'. $animeID . '/characters');

        $processed->Characters = main::processCharactersJSON(json_decode($character_answer,true));
        return $processed;
    }

    public static function makeWebRequest($requestURL)
    {
        $cUrlConnection = curl_init();

        curl_setopt($cUrlConnection, CURLOPT_URL, $requestURL);
        curl_setopt($cUrlConnection, CURLOPT_RETURNTRANSFER, true);

        $answer = curl_exec($cUrlConnection);
        curl_close($cUrlConnection);

        return $answer;
    }
}

// Working curl 
//------------------------------------------------------------------------------------
// $cUrlConnection = curl_init();

// curl_setopt($cUrlConnection, CURLOPT_URL, 'https://api.jikan.moe/v4/seasons/'.$year.'/'.$season);
// curl_setopt($cUrlConnection, CURLOPT_RETURNTRANSFER, true);

// $answer = curl_exec($cUrlConnection);
// curl_close($cUrlConnection);


// $processed = main::processSeasonJSON(json_decode($answer,true));

// var_dump($processed);