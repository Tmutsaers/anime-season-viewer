{run_function cClass="Module\HttpClient\Main" pFunction="getCurrentSeason" aParameters=[] aVariable="animes" bStatic=false}

<div class="animes_container">
    <div class="animes__inner-title">
        <h1 class="animes-general-title">Animes airing this season</h1>
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