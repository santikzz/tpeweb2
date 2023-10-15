{include "templates/template.dashboard_header.tpl"}

<div class="container-fluid row p-4">

    <div class="container col-5 bg-gray rounded p-2 m-2">
        <form method="POST" action="/dashboard/add">

            <h2 class="text-center">Add new movie</h2>

            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
            </div>

            <div class="form-group">
                <label>Genre</label>
                <select class="form-select" name="genre">
                    {foreach from=$genres item=genre}
                        <option value="{$genre->id}">{$genre->nombre}</option>
                    {/foreach}
                </select>
            </div>

            <div class="form-group">
                <label>Author</label>
                <input type="text" class="form-control" name="author">
            </div>

            <div class="form-group">
                <label>Image URL</label>
                <input type="text" class="form-control" name="image">
            </div>

            <div class="form-group mt-2">
                <button type="submit" class="btn btn-primary" name="newMovie">Add new</button>
            </div> 

        </form>
    </div>

    <div class="container col-5 bg-gray rounded p-2 m-2">
        <form method="POST" action="/dashboard/add">

            <h2 class="text-center">Add new genre</h2>

            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="name">
            </div>
            
            <div class="form-group mt-2">
                <button type="submit" class="btn btn-primary" name="newGenre">Add new</button>
            </div>

        </form>
    </div>

</div>

{include "templates/template.dashboard_footer.tpl"}