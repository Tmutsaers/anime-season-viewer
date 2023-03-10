<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/150ca88a92.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
    <div class="linkBar">
        {include file="./tpl/navigation.tpl"}
    </div>
    <div class="mobile-menu" id="mobile-menu">
        {include file="./tpl/mobile-menu.tpl"}
    </div>
    <div id="overlay" onclick='closeMobileMenu()'></div>
    
    <div class="main-container">
        <div class="wrap main">
            {* {include file="./tpl/main.tpl"} *}
            {* {include file="./tpl/seasonpicker.tpl"} *}
            {include file="{$currentPage}"}
        </div>                
    </div>

</body>

</html>