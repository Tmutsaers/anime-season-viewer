{* {run_function cClass="Module\HttpClient\Main" pFunction="getCurrentSeason" aParameters=[] aVariable="animes" bStatic=false} *}
<div class="animes_container">
    <div class="animes__inner-title">
        <div class="animes__inner-icons">
            <i class="fa-solid fa-border-all" id="detail-view" onclick="changeLayout('detail')"></i>
            <i class="fa-solid fa-list" id="list-view" onclick="changeLayout('list')"></i>
        </div>
        <h1 class="animes-general-title">Animes airing this season</h1>
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
<script>
    function formPost(ID) 
    {
        let form = document.getElementById("submitForm");
        let IDinput = document.getElementById("anime_ID-value");
        IDinput.value = ID;
        form.submit();
    }

    function changeLayout(layout = "detail")
    {
        let anime__inner = document.getElementsByClassName("anime__inner");
        let anime__inner_top = document.getElementsByClassName("anime__inner-top");
        let anime__inner_image = document.getElementsByClassName("anime__inner-image");

        if(layout == "list")
        {
            for(const element of anime__inner)
            {
                element.style.flexDirection = "row";
            }

            for(const element of anime__inner_top)
            {
                element.style.display = "flex";
                element.style.flexDirection = "column";
            }

            for(const element of anime__inner_image)
            {
                element.style.marginLeft = "0px";
                element.style.marginRight = "0px";
                element.style.paddingLeft = "10px";
                element.style.paddingBottom = "10px";
            }
        }
        if(layout == "detail")
        {
            for(const element of anime__inner)
            {
                element.style.flexDirection = "column";
            }

            for(const element of anime__inner_top)
            {
                element.style.display = "initial";
            }

            for(const element of anime__inner_image)
            {
                element.style.marginLeft = "50px";
                element.style.marginRight = "50px";
                element.style.paddingLeft = "0px";
                element.style.paddingBottom = "0px";
            }          
        }

    }
</script>