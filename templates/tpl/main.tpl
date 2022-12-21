{run_function cClass="Module\HttpClient\Main" pFunction="testJSON" aParameters=[] aVariable="animes" bStatic=false}

<div class="animes_container">
    <div class="animes__inner-title">
        <h1 class="animes-general-title">Animes airing this season.</h1>
    </div>
    <div class="animes__inner">
        {foreach $animes as $value}
            <div class="anime-container">
                <div class="anime__inner">
                    <div class="anime__inner-image">
                        <img src="{$value['images']['jpg']['image_url']}">
                        <a class="block-link" href="{$value['url']}"></a>
                    </div>

                    <div class="anime__inner-title">
                        <p>{$value['titles'][0]['title']}</p>
                    </div>

                    <div class="anime__inner-description">
                        <p>{$value['synopsis']}</p>
                    </div>

                </div>
            </div>
        {/foreach}
    </div>
</div>