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
    {assign var='general_title' value='Animes that aired during this season'}
    {include file="./main.tpl"}
{/if}
