{include "templates/template.dashboard_header.tpl"}

<div class="container-fluid row p-4">

    <div class="container col-5 bg-gray rounded p-2 m-2">
        <form method="POST" action="/dashboard/update">

            <h2 class="text-center">Edit genre</h2>

            <input type="hidden" name="id" value="{$genre->id}">

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="title" value="{$genre->nombre}">
            </div>

            <div class="form-group mt-2">
                <button type="submit" class="btn btn-primary" name="updateGenre">Update</button>
            </div> 

        </form>
    </div>
    
    </div>

{include "templates/template.dashboard_footer.tpl"}