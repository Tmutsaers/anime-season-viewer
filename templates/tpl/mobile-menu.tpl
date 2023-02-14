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