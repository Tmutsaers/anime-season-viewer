<div class="navbar_container">
    <div class="wrap navbar__inner">
        {foreach $Pages as $page}
            <div class="navbar__inner-page">
                {* <span class="page-title">{$page->pageDisplayName}</span> *}
                {* <a class="page-title" href={$page->pageUrl}>{$page->pageDisplayName}</a> *}
                <form action="{$page->pageUrl}" method="post">
                    <input type="hidden" name="page" value="{$page->pageUrl}"/>
                    <button class="btn" type="submit">{$page->pageDisplayName}</button>
                </form>
            </div>
        {/foreach}
    </div>
</div>