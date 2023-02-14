<div class="searchpicker_container">
    <div class="searchpicker_title">
        <h1>Search for anime by name</h1>
    </div>
    <div class="searchpicker__inner">
        <form class="searchpicker__inner-form" id="searchpickerForm" action="searchpicked" method="post">
            <label for="searchInput">Name:</label>
            <input type="text" id="searchInput" name="q">
            <label for="statusInput">Status</label>
            <select name="status" id="statusInput">
                <option value="airing">Airing</option>
                <option value="complete">Complete</option>
                <option value="upcoming">Upcoming</option>
            </select>
            <label for="genreInput">Genre</label>
            <select name="genre" id="genreInput">
                {foreach $genres as $genre}
                    <option value="{$genre->mal_id}">{$genre->name}</option>
                {/foreach}
            </select>
            <label for="orderbyInput">Order by</label>
            <select name="orderby" id="orderbyInput">
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
            <label for="sortInput">Sort</label>
            <select name="sort" id="sortInput">
                <option value="desc">Descending</option>
                <option value="asc">Ascending</option>
            </select>

            <input type="hidden" name="page" value="searchpicked"/>
        </form>
        <input class="btn submitBTN" type="submit" form="searchpickerForm" value="Submit">
    </div>
</div>

{if isset($animes)}
    <div class="animes_container">
        <div class="animes__inner-title">
            <h1 class="animes-general-title">Animes returned by query</h1>
        </div>
        <div class="animes_inner">
            {foreach $animes as $value}
                <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top top-no-image">
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