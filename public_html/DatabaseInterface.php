<?php

namespace Module\HttpClient;

use Module\HttpClient\Anime;
use Module\HttpClient\Weekdays;

class DatabaseInterface
{
    public $connection;

    function __construct()
    {
        $servername = '127.0.0.1'; //localhost
        $username = 'root';
        $password = '';
        $database = 'anime_viewer';

        $this->connection = mysqli_connect($servername,$username,$password,$database);
    }
    
    /**
     * FillAnimeList Writes Anime object array to Database
     *
     * @param  mixed $Anime
     * @return void
     */
    function FillAnimeList($Anime)
    {
        // mysqli_report(MYSQLI_REPORT_ERROR);
        foreach($Anime as $anime_value)
        {
            $query = sprintf("INSERT INTO `Anime` (Name,Day,Description,Image,Url,Year,Season,MalID)
            VALUES ('%s','%s','%s','%s','%s','%d','%s','%d')",
            mysqli_real_escape_string($this->connection,$anime_value->name),$anime_value->day,
            mysqli_real_escape_string($this->connection,$anime_value->description),
            mysqli_real_escape_string($this->connection,$anime_value->image),
            mysqli_real_escape_string($this->connection,$anime_value->url),
            $anime_value->year,$anime_value->season,
            $anime_value->ID);
            $result = mysqli_query($this->connection,$query);
        }
    }
    
    /**
     * getAnime Retrieves Anime array from Database
     *
     * @param  mixed $where
     * @param  mixed $table
     * @return void
     */
    function getAnime($where = "", $table = "Anime")
    {
        $query = "SELECT * FROM `".$table . "` ".$where . "";
        $result = mysqli_query($this->connection,$query);
        
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    
    /**
     * processAnimeSeasonDB Maps Database query result to Anime object Array
     *
     * @param  mixed $anime_seasons
     * @return void
     */
    function processAnimeSeasonDB($anime_seasons)
    {
        $animeSeason = array();

        foreach($anime_seasons as $anime_value)
        {
            $anime = new Anime();
            $anime->name = $anime_value['Name'];
            $anime->day = $anime_value['Day'];
            $anime->description = $anime_value['Description'];
            $anime->image = $anime_value["Image"];
            $anime->url = $anime_value["Url"];
            $anime->year = $anime_value['Year'];
            $anime->season = $anime_value["Season"];
            $anime->ID = $anime_value["MalID"];
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