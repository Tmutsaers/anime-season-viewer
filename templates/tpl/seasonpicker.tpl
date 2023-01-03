{$animes = null}
<div class="seasonpicker_container">
    <div class="seasonpicker_title">
        <h2> Pick a year and season </h2>
    </div>
    <div class="seasonpicker__inner">
        {* <div class="seasonpicker__inner-year">
            <p></p>
            <input></input>
        </div>
        <div class="seasonpicker__inner-season">
            <p></p>

        </div> *}

        <iframe name="hiddenFrame" class="hide"></iframe>

        <form class="seasonpicker__inner-form" action="/Formhandler.php" target="_blank" method="post">
            <label for="yearInput">Year</label>
            <input type="text" id="yearInput" value='2022' name="year"><br><br>
            <label for="seasonInput">Season</label>
            <input type="text" id="seasonInput" value="winter" name="season"><br><br>
            <input type="submit" value="Submit">
        </form>
        {debug}
        {* <button class="seasonpicker__inner-button" id="formBTN">
            test
        </button>
        <p id="testElement">Test </p> *}
    </div>
</div>
{if !empty($animes)}
    <div class="animes_container">
        <div class="animes__inner-title">
            <h1 class="animes-general-title">Animes airing this season.</h1>
        </div>
        <div class="animes_inner">
            {foreach $animes as $value}
                <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2>{$value->day}</h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="{$value->image}">
                                <a class="block-link" href="{$value->url}"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>{$value->name}</h2>
                            </div>

                            <div class="anime__inner-description">
                                {$value->description}
                            </div>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>    
{/if}

<script>
    document.getElementById("formBTN").addEventListener("click", function() 
    {
        var year = document.getElementById("yearInput").value;
        var season = document.getElementById("seasonInput").value;        

        // document.getElementById("testElement").innerHTML = season;
    });

</script>