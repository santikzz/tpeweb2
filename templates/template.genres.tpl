{include "templates/template.header.tpl"}
<div class="genres"> 
    {if $genres}
        {foreach from=$genres item=genre}
            <a class="genre" href="/movies/{$genre->nombre}">{$genre->nombre}</a>
        {/foreach}
    {/if}
</div>
{include "templates/template.footer.tpl"}