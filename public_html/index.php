<?php  

    require_once __DIR__.'../../vendor/autoload.php';

    require './AnimeManager.php';

    $animeManager = new AnimeManager();

    $_page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'currentSeason';

    // $animeManager->displayEmptySeasonPicker();

    // var_dump($_GET);
    // echo("==============================================================");
    // var_dump($_SERVER);

    switch($_page)
    {
        case 'seasonpicked':
            $animeManager->displaySeasonPicked($_POST);
            break;

        case 'seasonpicker':
            $animeManager->displayEmptySeasonPicker();
            break;
        
        case 'currentseason':
            default:
            $animeManager->displayCurrentSeason();
            break;
    }
    
 ?>