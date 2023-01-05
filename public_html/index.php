<?php  

    require_once __DIR__.'../../vendor/autoload.php';

    require './AnimeManager.php';

    $animeManager = new AnimeManager();

    //$animeManager->displayEmptySeasonPicker();

    $_action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'currentSeason';

    switch($_action)
    {

        case 'submit':
            //var_dump($_POST);
            $animeManager->displaySeasonPicked($_POST);
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


    //$smarty = new Smarty();

    // $smarty = SmartySingleton::instance();

//$smarty->testInstall();
    // $smarty->display('index.tpl');
    
 ?>