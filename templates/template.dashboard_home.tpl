{include "templates/template.dashboard_header.tpl"}

<div class="container-fluid p-4">
<a href="/dashboard/new" class="btn btn-primary">Add Movie / Genre</a>

    <h2 class="mt-4">Movies</h2>
    <table class="table bg-gray rounded mt-4">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Genre</th>
            <th scope="col">Author</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        
        
            {if $movies}
                {foreach from=$movies item=movie}
                    <tr>
                        <th scope="row">{$movie->id}</th>
                        <td>{$movie->nombre}</td>
                        <td>{$movie->genero}</td>
                        <td>{$movie->autor}</td>
                        <td>{$movie->image}</td>
                        <td>
                            <a href="/dashboard/editMovie/{$movie->id}" type="button" class="btn btn-primary">Edit</a>
                            <a href="/dashboard/deleteMovie/{$movie->id}" type="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                {/foreach}
            {/if}

        </tbody>
    </table>

    <h2 class="mt-4">Genres</h2>
    <table class="table bg-gray rounded mt-4">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        
        
            {if $genres}
                {foreach from=$genres item=genre}
                    <tr>
                        <th scope="row">{$genre->id}</th>
                        <td>{$genre->nombre}</td>
                        <td>
                            <a href="/dashboard/editGenre/{$genre->id}" type="button" class="btn btn-primary">Edit</a>
                            <a href="/dashboard/deleteGenre/{$genre->id}" type="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                {/foreach}
            {/if}

        </tbody>
    </table>


</div>

{include "templates/template.dashboard_footer.tpl"}