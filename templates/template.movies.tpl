{include "templates/template.header.tpl"}

<div class="content">
    <div class="title">
        <h2 class="genre-title"><i class="fa-solid fa-magnifying-glass"></i>{$genre}</h2>
    </div>
    <div class="movies-list show-all">
        
        {if $movies}
            {foreach from=$movies item=movie}
                <div class="card">
                    <a class="card-link" href="/watch/{$movie->id}">
                        <img class="image" src="{$movie->image}">
                    </a>
                    <label>{$movie->nombre}</label>
                </div>
            {/foreach}
        {/if}

    </div>
</div>

{include "templates/template.footer.tpl"}