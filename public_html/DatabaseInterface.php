<?php

namespace Module\HttpClient;

use DateTimeZone;
use Module\HttpClient\Anime;
use Module\HttpClient\Weekdays;

class DatabaseInterface
{
    public $connection;
    public $databaseNameList = array();
    public $currentDate;
    const TIMETOEXPIRE = 7;

    function __construct()
    {
        $servername = '127.0.0.1'; //localhost
        $username = 'root';
        $password = '';
        $database = 'anime_viewer';

        $this->databaseNameList = array("Anime","Anime_Characters","Anime_Detail");

        $timezone = new DateTimeZone("Europe/Amsterdam");
        $this->currentDate = date_create_immutable("now",$timezone);

        $this->connection = mysqli_connect($servername,$username,$password,$database);
    }
    
    /**
     * deleteExpired Removes data older than a week from the database
     *
     * @return void
     */
    function deleteExpired()
    {
        $currentDate = $this->currentDate->format('Y-m-d');

        foreach($this->databaseNameList as $database)
        {
            $query = sprintf("DELETE FROM `%s` WHERE (SELECT DATEDIFF(DateCreated,'%s')) >= %d",$database,$currentDate,self::TIMETOEXPIRE);
            $result = mysqli_query($this->connection,$query);
        }        
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
            $query = sprintf("INSERT INTO `Anime` (Name,Day,Description,Image,Url,Year,Season,MalID,DateCreated)
            VALUES ('%s','%s','%s','%s','%s','%d','%s','%d','%s')",
            mysqli_real_escape_string($this->connection,$anime_value->name),$anime_value->day,
            mysqli_real_escape_string($this->connection,$anime_value->description),
            mysqli_real_escape_string($this->connection,$anime_value->image),
            mysqli_real_escape_string($this->connection,$anime_value->url),
            $anime_value->year,$anime_value->season,
            $anime_value->ID,
            $this->currentDate->format('Y-m-d')
            );
            $result = mysqli_query($this->connection,$query);
        }
    }
    
    /**
     * FillAnimeDetail Writes anime_detail data into the database
     *
     * @param  mixed $anime_detail
     * @return void
     */
    function FillAnimeDetail($anime_detail)
    {
        // mysqli_report(MYSQLI_REPORT_ERROR);
        $query = sprintf("INSERT INTO `Anime_Detail` (id,ENname,JPname,day,description,thumbnail,url,additionalInfo,DateCreated)
        VALUES ('%d','%s','%s','%s','%s','%s','%s','%s','%s')",
        $anime_detail->ID, 
        mysqli_real_escape_string($this->connection,$anime_detail->ENname),
        mysqli_real_escape_string($this->connection,$anime_detail->JPname),
        $anime_detail->day,
        mysqli_real_escape_string($this->connection,$anime_detail->description),
        mysqli_real_escape_string($this->connection,$anime_detail->thumbnail),
        mysqli_real_escape_string($this->connection,$anime_detail->url),
        mysqli_real_escape_string($this->connection,$this->mapAdditionalInfotoJson($anime_detail)),
        $this->currentDate->format('Y-m-d'));
        $result = mysqli_query($this->connection,$query);

        $this->FillAnimeCharacter($anime_detail->Characters);
    }
    
    /**
     * mapAdditionalInfotoJson Encodes additional info to a JSON string to prevent to many columns in the database
     *
     * @param  mixed $detail
     * @return string
     */
    function mapAdditionalInfotoJson($detail) : string
    {
        $arrayToConvert = array(
            "episodeAmount" => $detail->episodeAmount,
            "startDate" => $detail->startDate,
            "endDate" => $detail->endDate,
            "score" => $detail->score,
            "rank" => $detail->rank,
            "popularity" => $detail->popularity,
            "favorites" => $detail->favorites,
            "season" => $detail->season,
            "year" => $detail->year,
            "producers" => $detail->producers,
            "studios" => $detail->studios,
            "genres" => $detail->genres,
            "themes" => $detail->themes,
            "demographics" => $detail->demographics,
            "streamedOn" => $detail->streamedOn
        );

        return json_encode($arrayToConvert);
    }
    
    /**
     * FillAnimeCharacter Writes anime characters into the database
     *
     * @param  mixed $anime_character
     * @return void
     */
    function FillAnimeCharacter($anime_characters)
    {
        foreach($anime_characters as $anime_character)
        {
            $query = sprintf("INSERT INTO `Anime_Character` (characterID,animeID,name,role,image,favorites,url,DateCreated)
            VALUES ('%d','%d','%s','%s','%s','%d','%s','%s')",
            $anime_character->ID,
            $anime_character->animeID,
            mysqli_real_escape_string($this->connection,$anime_character->name),
            $anime_character->role,
            mysqli_real_escape_string($this->connection,$anime_character->image),
            $anime_character->favorites,
            mysqli_real_escape_string($this->connection,$anime_character->url),
            $this->currentDate->format('Y-m-d')
            );
            
            $result = mysqli_query($this->connection,$query);
        }
    }
    
    /**
     * getAnime Retrieves Anime array from Database
     *
     * @param  mixed $where
     * @param  mixed $table
     * @return array
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
    
    /**
     * processAnimeDetailDB Maps the retrieved animeDetaildata to an AnimeDetail object
     *
     * @param  mixed $animeResult
     * @param  mixed $animeID
     * @return AnimeDetail
     */
    function processAnimeDetailDB($animeResult,$animeID)
    {
        $animeDetail = new AnimeDetail();
        $animeDetail->ENname = $animeResult['ENname'];
        $animeDetail->JPname = $animeResult['JPname'];
        $animeDetail->day = $animeResult['day'];
        $animeDetail->description = $animeResult['description'];
        $animeDetail->thumbnail = $animeResult['thumbnail'];
        $animeDetail->url = $animeResult['url'];
        $animeDetail->ID = $animeResult['id'];
        $animeDetail->Characters = $this->processAnimeCharacters($animeID);
        $animeDetail = $this->mapJsontoAdditionalInfo($animeDetail, $animeResult['additionalInfo']);

        return $animeDetail;
    }
    
    /**
     * processAnimeCharacters retrieves and maps the appropiate characters to the animedetail object
     *
     * @param  mixed $animeID
     * @return array
     */
    function processAnimeCharacters($animeID)
    {
        $query = "WHERE animeID = '".$animeID."'";
        $charResult = $this->getAnime($query,"Anime_Character");

        $characters = array();
        foreach($charResult as $animeChar)
        {
            $char = new Character();
            $char->ID = $animeChar['characterID'];
            $char->animeID = $animeChar['animeID'];
            $char->name = $animeChar['name'];
            $char->role = $animeChar['role'];
            $char->image = $animeChar['image'];
            $char->favorites = $animeChar['favorites'];
            $char->url = $animeChar['url'];
            $characters[] = $char;
        }
        return $characters;
    }
    
    /**
     * mapJsontoAdditionalInfo maps the extra info to the remaining fields of AnimeDetail
     *
     * @param  mixed $animeDetail
     * @param  mixed $extraInfoJSON
     * @return AnimeDetail
     */
    function mapJsontoAdditionalInfo($animeDetail, $extraInfoJSON)
    {
        $decodedJSON = json_decode($extraInfoJSON, true);

        $animeDetail->episodeAmount = $decodedJSON['episodeAmount'];
        $animeDetail->startDate = $decodedJSON['startDate'];
        $animeDetail->endDate = $decodedJSON['endDate'];
        $animeDetail->score = $decodedJSON['score'];
        $animeDetail->rank = $decodedJSON['rank'];
        $animeDetail->popularity = $decodedJSON['popularity'];
        $animeDetail->favorites = $decodedJSON['favorites'];
        $animeDetail->season = $decodedJSON['season'];
        $animeDetail->year = $decodedJSON['year'];
        $animeDetail->producers = $decodedJSON['producers'];
        $animeDetail->studios = $decodedJSON['studios'];
        $animeDetail->genres = $decodedJSON['genres'];
        $animeDetail->themes = $decodedJSON['themes'];
        $animeDetail->demographics = $decodedJSON['demographics'];
        $animeDetail->streamedOn = $decodedJSON['streamedOn'];
        return $animeDetail;   
    }
}