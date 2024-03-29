<?php

namespace Module\Controller;

use Module\Controller\DatabaseInterface;
use Module\Model\AnimeDetail;
use Module\Model\Weekdays;
use Module\Model\Anime;

class Handler
{
    public static $FILES_PATH = ".\\files";

    public static $dbConnection;

    public static function initDBConnection()
    {
        self::$dbConnection = new DatabaseInterface();
    }
    
    /**
     * handleGet Unused method 
     *
     * @return array
     */
    public static function handleGet(): array
    {
        $readFile = file_get_contents(self::$FILES_PATH . '\animeSeason.txt');
        $processed = main::processSeasonJSON(json_decode($readFile,true));
        return $processed;
    }
    
    /**
     * handlePost Handles the seasonPicker requests
     * First checks if the anime season is already in the Database
     * If it is then it uses the database values
     * If not it will pull it via REST request and add it to the Database
     *
     * @param  mixed $Post associative array containing the Year and Season value for the search
     * @return array
     */
    public static function handlePost($Post): array
    {
        $year = $Post['year'];
        $season = $Post['season'];

        $query = sprintf("WHERE Year='%s' AND Season='%s'",$year,$season);
        $animeResult = self::$dbConnection->getAnime($query);

        if(is_null($animeResult) || empty($animeResult)  === false)
        {
            return self::$dbConnection->processAnimeSeasonDB($animeResult);
        }

        $cUrlConnection = curl_init();

        curl_setopt($cUrlConnection, CURLOPT_URL, 'https://api.jikan.moe/v4/seasons/'.$year.'/'.$season);
        curl_setopt($cUrlConnection, CURLOPT_RETURNTRANSFER, true);

        $answer = curl_exec($cUrlConnection);
        curl_close($cUrlConnection);

        $processed = main::processSeasonJSON(json_decode($answer,true));
        self::$dbConnection->FillAnimeList($processed);

        return $processed;
    }
    
    /**
     * handlePostGenre Handles the Genre requests
     *
     * @param  mixed $Post
     * @return array
     */
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

    public static function getGenrebyID($Genres,$ID)
    {
        foreach($Genres as $genre)
        {
            if( $ID == $genre->mal_id)
            {
                return $genre;
            }
        }
        return false;
    }
    
    /**
     * createSearchQuery Creates a search query out of the search parameters for the REST request
     *
     * @param  mixed $post
     * @return string
     */
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
    
    /**
     * handlePostSearch Handles the search requests
     *
     * @param  mixed $Post
     * @return array
     */
    public static function handlePostSearch($Post): array
    {
        $query = self::createSearchQuery($Post);

        $cUrlConnection = curl_init();

        curl_setopt($cUrlConnection, CURLOPT_URL, 'https://api.jikan.moe/v4/anime?sfw=true'.$query);
        curl_setopt($cUrlConnection, CURLOPT_RETURNTRANSFER, true);

        $answer = curl_exec($cUrlConnection);
        curl_close($cUrlConnection);

        $processed = main::processJSON(json_decode($answer,true));
        return $processed;
    }
    
    /**
     * handleGetFullAnime Handles the anime detail screen requests
     *
     * @param  mixed $Post
     * @return AnimeDetail
     */
    public static function handleGetFullAnime($Post) : AnimeDetail
    {
        $animeID = $Post['animeID'];

        $query = "WHERE id='".$animeID."'";
        $animeResult = self::$dbConnection->getAnime($query,"Anime_Detail");

        if(is_null($animeResult) || empty($animeResult) === false)
        {
            return self::$dbConnection->processAnimeDetailDB($animeResult[0],$animeID);
        }

        $answer = self::makeWebRequest('https://api.jikan.moe/v4/anime/' . $animeID . '/full');

        $processed = main::processAnimeDetailJSON(json_decode($answer,true));

        $character_answer = self::makeWebRequest('https://api.jikan.moe/v4/anime/'. $animeID . '/characters');

        $processed->Characters = main::processCharactersJSON(json_decode($character_answer,true),$processed->ID);

        sleep(3);
        $processed->Pictures = Handler::handleAnimeDetailPictures($processed);        

        self::$dbConnection->FillAnimeDetail($processed);

        return $processed;
    }
    
    /**
     * handleCurrentSeason Handles the currentSeason requests (uses its own endpoint in JIKAN)
     *
     * @return void
     */
    public static function handleCurrentSeason()
    {
        $answer = main::getCurrentSeason();
        self::$dbConnection->FillAnimeList($answer);
        return $answer;
    }
    
    /**
     * makeWebRequest sends the webrequest (GET) to the specified URL 
     *
     * @param  mixed $requestURL
     * @return string
     */
    public static function makeWebRequest($requestURL)
    {
        $cUrlConnection = curl_init();

        curl_setopt($cUrlConnection, CURLOPT_URL, $requestURL);
        curl_setopt($cUrlConnection, CURLOPT_RETURNTRANSFER, true);

        $answer = curl_exec($cUrlConnection);
        curl_close($cUrlConnection);

        return $answer;
    }
    
    /**
     * handleAnimeDetailPictures retrieves the relevant anime pictures
     *
     * @param  mixed $animeDetail
     * @return array
     */
    public static function handleAnimeDetailPictures($animeDetail) : array
    {
        $answer = self::makeWebRequest('https://api.jikan.moe/v4/anime/' . $animeDetail->ID . '/pictures');
        $Pictures = Main::processAnimePicturesJSON(json_decode($answer,true));
        return $Pictures;
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

// STUFF 
//-----------------------------------------------------------------------------------
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