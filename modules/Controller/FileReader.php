<?php

namespace Module\Controller;

use Module\Model\Genre;

class FileReader
{
    public static $FILES_PATH = ".\\files";
    public static $ANIME_GENRES_FILE = "\\animeGenres.json";
    
    /**
     * ReadGenres Performs file IO to read the animeGenres.json file
     *
     * @return array
     */
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
    
    /**
     * processGenresJSON processes the read values from the animeGenres.json file
     *
     * @param  mixed $jsonArray
     * @return array
     */
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