{include "templates/template.dashboard_header.tpl"}

<div class="container-fluid row p-4">

    <div class="container col-5 bg-gray rounded p-2 m-2">
        <form method="POST" action="/dashboard/update">

            <h2 class="text-center">Edit movie</h2>

            <input type="hidden" name="id" value="{$movie->id}">

            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="{$movie->nombre}">
            </div>

            <div class="form-group">
                <label>Genre</label>
                <select class="form-select" name="genre">
                    {foreach from=$genres item=genre}
                        <option value="{$genre->id}" {if $genre->id eq $movie->id_genero} selected {/if} >{$genre->nombre}</option>
                    {/foreach}
                </select>
            </div>

            <div class="form-group">
                <label>Author</label>
                <input type="text" class="form-control" name="author" value="{$movie->autor}">
            </div>

            <div class="form-group">
                <label>Image URL</label>
                <input type="text" class="form-control" name="image" value="{$movie->image}">
            </div>

            <div class="form-group mt-2">
                <button type="submit" class="btn btn-primary" name="updateMovie">Update</button>
            </div> 

        </form>
    </div>

</div>

{include "templates/template.dashboard_footer.tpl"}