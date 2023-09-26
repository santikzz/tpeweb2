<?php


class DashboardView {

    public function showDashboard($movies){
        require_once "./templates/template.dashboard_header.php"; ?>
        
        <div class="container-fluid p-4">

        <table class="table">
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
            
            <?php
                if($movies){
                    foreach($movies as $movie){ ?>
                        <tr>
                            <th scope="row"><?php echo $movie->id; ?></th>
                            <td><?php echo $movie->nombre; ?></td>
                            <td><?php echo $movie->genero; ?></td>
                            <td><?php echo $movie->autor; ?></td>
                            <td><?php echo $movie->image; ?></td>
                            <td>
                                <a href="/dashboard/edit/<?php echo $movie->id; ?>" type="button" class="btn btn-primary">Edit</a>
                                <a href="/dashboard/delete/<?php echo $movie->id; ?>" type="button" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                <?php } } ?>

            
            </tbody>
        </table>

        </div>

        <?php require_once "./templates/template.dashboard_footer.php";
    }


    }