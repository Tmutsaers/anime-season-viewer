<div class="searchpicker_container">
    <div class="searchpicker_title">
        <h2>Search for anime by name</h2>
    </div>
    <div class="searchpicker__inner">
        <form class="searchpicker__inner-form" id="searchpickerForm" action="searchpicked" method="post">
            <label for="searchInput">Name:</label>
            <input type="text" id="searchInput" name="searchText">
            <input type="hidden" name="page" value="searchpicked"/>
        </form>
        <input type="submit" form="searchpickerForm" value="Submit">
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