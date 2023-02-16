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
    <div class="animes_container">
        <div class="animes__inner-title">
            <h1 class="animes-general-title">Animes returned by query</h1>
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
<script>
    function formPost(ID) 
    {
        let form = document.getElementById("submitForm");
        let IDinput = document.getElementById("anime_ID-value");
        IDinput.value = ID;
        form.submit();
    }
</script>