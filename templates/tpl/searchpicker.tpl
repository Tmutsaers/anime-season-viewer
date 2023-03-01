<div class="searchpicker_container">
    <div class="searchpicker_title">
        <h1>Search for anime by name</h1>
    </div>
    <div class="searchpicker__inner">
        <form class="searchpicker__inner-form" id="searchpickerForm" action="searchpicked" method="post">
            <div class="field">
                <label for="searchInput">Name:</label>
                <input type="text" id="searchInput" name="q" value="{$SEARCH_VALUE}">
            </div>
            <div class="field">
                <label for="statusInput">Status</label>
                <select name="status" id="statusInput">
                    <option value="{$STATUS_VALUE}" selected hidden>{$STATUS_VALUE}</option>
                    <option value="airing">Airing</option>
                    <option value="complete">Complete</option>
                    <option value="upcoming">Upcoming</option>
                </select>
            </div>
            <div class="field">
                <label for="genreInput">Genres</label>
                <select name="genres" id="genreInput">
                    <option value="{$GENRE_ID_VALUE}" selected hidden>{$GENRE_NAME_VALUE}</option>
                    {foreach $genres as $genre}
                        <option value="{$genre->mal_id}">{$genre->name}</option>
                    {/foreach}
                </select>
            </div>
            <div class="field">
                <label for="orderbyInput">Order by</label>
                <select name="orderby" id="orderbyInput">
                    <option value="{$ORDERBY_VALUE}" selected hidden>{$ORDERBY_VALUE}</option>
                    <option value="mal_id">ID</option>
                    <option value="title">Title</option>
                    <option value="type">Type</option>
                    <option value="rating">Rating</option>
                    <option value="start_date">Start date</option>
                    <option value="end_date">End date</option>
                    <option value="episodes">Episode amount</option>
                    <option value="score">Score</option>
                    <option value="scored_by">Scored by</option>
                    <option value="rank">Rank</option>
                    <option value="popularity">Popularity</option>
                    <option value="members">Members</option>
                    <option value="favorites">Favorites</option>
                </select>
            </div>
            <div class="field">
                <label for="sortInput">Sort</label>
                <select name="sort" id="sortInput">
                    <option value="{$SORT_VALUE}" selected hidden>{$SORT_VALUE}</option>
                    <option value="desc">Descending</option>
                    <option value="asc">Ascending</option>
                </select>
            </div>
            <input type="hidden" name="page" value="searchpicked"/>
        </form>
        <input class="btn submitBTN" type="submit" form="searchpickerForm" value="Submit">
    </div>
</div>

{if isset($animes)}
    {assign var='general_title' value='Animes returned by search'}
    {include file="./main.tpl"}
{/if}
