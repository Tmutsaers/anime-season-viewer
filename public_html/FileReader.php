<?php

require ".\\Genre.php";

class FileReader
{
    public static $FILES_PATH = ".\\files";
    public static $ANIME_GENRES_FILE = "\\animeGenres.json";

    public static function ReadGenres() : array
    {
        if(file_exists(self::$FILES_PATH.self::$ANIME_GENRES_FILE))
        {
            $readFile = file_get_contents(self::$FILES_PATH . self::$ANIME_GENRES_FILE);
            $test = json_decode($readFile);
            $genres = self::processGenresJSON($test);
        }
        return $genres;
    }

    public static function processGenresJSON($jsonArray) : array
    {
        $animeGenres = array();

        foreach($jsonArray->data as $genre_value)
        {
            $genre = new Genre();
            $genre->mal_id = $genre_value->mal_id;
            $genre->name = $genre_value->name;
            $animeGenres[] = $genre;
        }

        return $animeGenres;
    }
}