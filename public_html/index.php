<?php  

    require_once __DIR__.'../../vendor/autoload.php';

    require './AnimeManager.php';

    $animeManager = new AnimeManager();

    $_action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'currentSeason';

    // $animeManager->displayEmptySeasonPicker();

    // var_dump($_GET);
    // echo("==============================================================");
    // var_dump($_SERVER);

    switch($_action)
    {

        case 'submit':
            //var_dump($_POST);
            $animeManager->displaySeasonPicked($_POST);
            // var_dump($_SERVER['REQUEST_URI']);
            break;

        case 'pickSeason':
            $animeManager->displayEmptySeasonPicker();
            break;
        
        case 'currentSeason':
            default:
            //$animeManager->displayCurrentSeason();
            $animeManager->displayEmptySeasonPicker();
            break;
    }
    
 ?>