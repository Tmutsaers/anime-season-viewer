<div class="seasonpicker_container">
    <div class="seasonpicker_title">
        <h1> Pick a year and season </h1>
    </div>
    <div class="seasonpicker__inner">
        <form class="seasonpicker__inner-form" id="datepickerForm" action="seasonpicked" method="post">
            <label for="yearInput">Year</label>
            <input type="number" id="yearInput" value="{$YEAR_VALUE}" name="year" min="1970" max="2023">
            <input type="hidden" name="page" value="seasonpicked"/>
        </form>

        <div class="season__inner-input_div">
            <label for="seasonInput">Season</label>
            <select name="season" id="seasonInput" form="datepickerForm">
                <option value="{$SEASON_VALUE}" selected hidden>{$SEASON_VALUE}</option>
                <option value="Winter">Winter</option>
                <option value="Fall">Fall</option>
                <option value="Spring">Spring</option>
                <option value="Summer">Summer</option>
            </select>
        </div>
        <div class="flexbreak"></div>
        <input class="btn" type="submit" form="datepickerForm" value="Submit">
    </div>
</div>
{if isset($animes)}
    <div class="animes_container">
        <div class="animes__inner-title">
            <h1 class="animes-general-title">Animes that aired during this season</h1>
        </div>
        <div class="animes_inner">
            {foreach $animes as $value}
                <div class="anime-container">
                    <div class="anime__inner">
                        <i class="fa-solid fa-ellipsis-vertical" id="open-detail" onclick=formPost({$value->ID})></i>
                        <form action="animedetail" id="submitForm" method="post">
                            <input type="hidden" name="page" value="animedetail"/>
                            <input type="hidden" name="animeID" id="anime_ID-value" value="{$value->ID}"/>
                        </form>
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
    function formPost(ID) 
    {
        let form = document.getElementById("submitForm");
        let IDinput = document.getElementById("anime_ID-value");
        IDinput.value = ID;
        form.submit();
    }
</script>