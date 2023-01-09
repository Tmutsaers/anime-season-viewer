<div class="navbar_container">
    <div class="navbar__inner">
        {foreach $Pages as $page}
            <div class="navbar__inner-page">
                <span class="page-title">{$page->$pageName}</span>
            </div>
        {/foreach}
    </div>
</div>