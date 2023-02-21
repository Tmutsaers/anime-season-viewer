<?php



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

    function getAllAnime()
    {
        //mysqli_query($this->connection,"USE `anime_viewer`");

        $query = "SELECT * FROM `Anime`"; 
        mysqli_report(MYSQLI_REPORT_ERROR);
        $result = mysqli_query($this->connection,$query);
        var_dump($result);
    }

    function FillAnimeList($Anime)
    {
        mysqli_report(MYSQLI_REPORT_ERROR);
        foreach($Anime as $anime_value)
        {
            $query = sprintf("INSERT INTO `Anime` (Name,Day,Description,Image,Url,MalID)
            VALUES ('%s','%s','%s','%s','%s','%d')",
            mysqli_real_escape_string($this->connection,$anime_value->name),$anime_value->day,
            mysqli_real_escape_string($this->connection,$anime_value->description),
            mysqli_real_escape_string($this->connection,$anime_value->image),
            mysqli_real_escape_string($this->connection,$anime_value->url),
            $anime_value->ID);

            var_dump($query);

            $result = mysqli_query($this->connection,$query);

            var_dump($result);
        }
    }


}