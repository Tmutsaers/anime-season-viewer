<?php  

    require_once __DIR__.'../../vendor/autoload.php';

    require './AnimeManager.php';

    $animeManager = new AnimeManager();

    $_page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'currentSeason';

    switch($_page)
    {
        case 'animedetail':
            $animeManager->displayDetailPage($_POST);
            break;

        case 'seasonpicked':
            $animeManager->displaySeasonPicked($_POST);
            break;

        case 'seasonpicker':
            $animeManager->displayEmptySeasonPicker();
            break;

        case 'genrepicker':
            $animeManager->displayGenrePicker();
            break;

        case 'genrepicked':
            $animeManager->displayGenrePicked($_POST);
            break;

        case 'searchpicker':
            $animeManager->displaySearchPicker();
            break;

        case 'searchpicked':
            $animeManager->displaySearchPicked($_POST);
            break;
        
        case 'currentseason':
            default:
            $animeManager->displayCurrentSeason($_POST);
            break;
    }
    
 ?>