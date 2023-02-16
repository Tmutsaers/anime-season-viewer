{debug}
<div class="anime-detail_container">
    <div class="anime-detail_title">
        <h1>{$animeDetail->ENname}</h1>
        <h2>{$animeDetail->JPname}</h2>
    </div>
    <div class="anime-detail__inner">
        <div class="anime-detail__inner-lefttab">
            <div class="anime-detail__inner-thumbnail">
            <img src="{$animeDetail->thumbnail}">
            </div>
            <div class="anime-detail__inner-info">
                Episodes: {$animeDetail->episodeAmount}<br>
                Starting Date: {$animeDetail->startDate}<br>
                End Date: {$animeDetail->endDate}<br>
                Score: {$animeDetail->score}<br>
                Rank: {$animeDetail->rank}<br>
                Popularity: {$animeDetail->popularity}<br>
                Favorites: {$animeDetail->favorites}<br>
                Season: {$animeDetail->season}<br>
                Year: {$animeDetail->year}<br><br>
                Producers: <br>
                {foreach $animeDetail->producers as $producer}
                    - {$producer}<br>
                {/foreach}<br>
                Studios: <br>
                {foreach $animeDetail->studios as $studio}
                    - {$studio}<br>
                {/foreach}<br>
                Genres: <br>
                {foreach $animeDetail->genres as $genre}
                    - {$genre}<br>
                {/foreach}<br>
                Themes: <br>
                {foreach $animeDetail->themes as $theme}
                    - {$theme}<br>
                {/foreach}<br>
                Demographics: <br>
                {foreach $animeDetail->demographics as $demographic}
                    - {$demographic}<br>
                {/foreach}<br>
                Streamed on: <br>
                {foreach $animeDetail->streamedOn as $streamingSite}
                    - {$streamingSite}<br>
                {/foreach}
            </div>
        </div>
        <div class="anime-detail__inner-righttab">
            <div class="anime-detail__inner-description">
                {$animeDetail->description}
            </div>
            <div class="anime-detail__inner-characters">
                {foreach $animeDetail->Characters as $value}
                    <div class="anime-detail__inner-character">
                        <img src="{$value->image}">
                        <h3>{$value->name}</h3>
                    </div>
                {/foreach}
            </div>
            {*PLACEHOLDER *}
            <div class="anime-detail__inner-extra">

            </div>
        </div>
    </div>
</div>