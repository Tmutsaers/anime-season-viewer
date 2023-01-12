<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
    <div class="linkBar">
        {include file="./tpl/navigation.tpl"}
    </div>
    <div class="wrap main-container">
    
        {* {include file="./tpl/main.tpl"} *}
        {* {include file="./tpl/seasonpicker.tpl"} *}
        {include file="{$currentPage}"}
        
    </div>

</body>

</html>