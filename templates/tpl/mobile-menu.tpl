<i class="fa-solid fa-xmark" id="close-button" onclick='closeMobileMenu()'></i>
<div class="mobile-menu__inner">
    {foreach $Pages as $page}
        <div class="mobile-menu__inner-page">
            <form action="{$page->pageUrl}" method="post">
                <input type="hidden" name="page" value="{$page->pageUrl}"/>
                <button class="btn" type="submit">{$page->pageDisplayName}</button>
            </form>
        </div>
    {/foreach}
</div>
<script>
    function closeMobileMenu()
    {
        let menu = document.getElementById("mobile-menu");
        let overlay = document.getElementById("overlay");
        menu.style.left = -100 + "%";
        overlay.style.left = -100 + "%";
    }
</script>