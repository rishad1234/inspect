<?php require_once('inc/header.php'); ?>

<div class="container section_space">
        <div class="row">
            <div class="col-md-7">
                <h1 style="display: inline-block; border-bottom:2px solid #1e1d1d">Job Posts</h1>
                <br><br>

                <?php foreach($data['jobs'] as $job){
                    ?>

                <div class="card">
                    <div class="card-header">
                        <?php echo $job['company'] ?>
                    </div>
                    <div class="card-body">
                        <p class="posiiton">
                            <strong style="text-decoration: underline"> Position:</strong><?php echo $job['position'] ?>
                        </p>
                        <p class="deadline">
                            <strong style="text-decoration: underline"> Application Deadline:</strong> <?php echo $job['deadline']; ?>
                        </p>
                        <p class="requirements-header">
                            <strong style="text-decoration: underline">Requirements:</strong>
                        </p>
                        <div class="requirements">
                            <?php echo $job['requirements']; ?>
                        </div>
                        <span><a href="<?php echo $job['link'] ?>"><button type="button"
                                    class="btn btn-outline-dark">Details</button></a></span>
                    </div>
                </div>
                <br>
                    <?php
                } ?>
            </div>




            <div class="col-md-5">
                <h1 style="display: inline-block; border-bottom:2px solid #1e1d1d">Sponsored Post</h1>
                <br><br>
                <div class="sponsored_post">
                <?php 
                    foreach($data['sponsored_news'] as $news){
                ?>
                    <div class="each_sponsor">
                        <img src="<?php echo URLROOT; ?>storage/images/<?php echo $news['image']; ?>" alt="">
                        <br><br>
                        <a class="sponsor_link_home" href="<?php echo URLROOT; ?>SingleNews/<?php echo $news['news_id'];?>">
                            <h5><?php echo $news['title']; ?></h5>
                        </a>


                        <p> <?php echo $news['excerpt']; ?> <span><a
                                    href="<?php echo URLROOT; ?>SingleNews/<?php echo $news['news_id'];?>">
                                    More</a></span>
                        </p>
                        <hr>
                    </div>
                <?php
                    }
                ?>
                </div>
            </div>
        </div>
    </div>

<?php require_once('inc/footer.php'); ?>