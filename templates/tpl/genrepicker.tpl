<div class="genrepicker_container">
    <div class="genrepicker_title">
        <h1>Pick a genre </h1>
    </div>
    <div class="genrepicker__inner">
        <form class="genrepicker__inner-form" id="genrepickerForm" action="genrepicked" method="post">
            <label for="genreInput">Genres</label>
            <select name="genre" id="genreInput" form="genrepickerForm">
                {foreach $genres as $genre}
                    <option value="{$genre->mal_id}">{$genre->name}</option>
                {/foreach}
            </select>
            <input type="hidden" name="page" value="genrepicked"/>
        </form>

        <input class="btn" type="submit" form="genrepickerForm" value="Submit">
    </div>
</div>
{if isset($animes)}
    {assign var='general_title' value='Animes in this genre'}
    {include file="./main.tpl"}
{/if}
