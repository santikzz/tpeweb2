<div class="content">
    <div class="title">
        <h2 class="genre-title"><i class="fa-solid fa-magnifying-glass"></i> <?php echo $title; ?></h2>
    </div>
    <div class="movies-list show-all">
        
        <?php
        if($movies){
            foreach($movies as $movie){ ?>
                <div class="card">
                    <a class="card-link" href="/watch/<?php echo $movie->id."/".string_to_url($movie->nombre); ?>">
                        <img class="image" src="images/<?php echo $movie->image; ?>">
                    </a>
                    <label><?php echo $movie->nombre; ?></label>
                </div>
        <?php } } ?>
    </div>
</div>