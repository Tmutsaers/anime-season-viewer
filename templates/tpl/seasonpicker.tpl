<div class="seasonpicker_container">
    <div class="seasonpicker_title">
        <h2> Pick a year and season </h2>
    </div>
    <div class="seasonpicker__inner">
        <form class="seasonpicker__inner-form" id="datepickerForm" action="seasonpicked" method="post">
            <label for="yearInput">Year</label>
            <input type="number" id="yearInput" value="{$YEAR_VALUE}" name="year" min="1970" max="2023"><br><br>
            <input type="hidden" name="page" value="seasonpicked"/>
        </form>

        <label for="seasonInput">Season</label>
        <select name="season" id="seasonInput" form="datepickerForm">
            <option value="{$SEASON_VALUE}" selected hidden>{$SEASON_VALUE}</option>
            <option value="Winter">Winter</option>
            <option value="Fall">Fall</option>
            <option value="Spring">Spring</option>
            <option value="Summer">Summer</option>
        </select><br><br>

        <input type="submit" form="datepickerForm" value="Submit">


    </div>
</div>
{if isset($animes)}
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