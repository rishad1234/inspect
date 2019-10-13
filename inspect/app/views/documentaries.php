<?php require_once('inc/header.php');?>

<div class="container section_space">
        <div class="row">
            <div class="col-md-7">
                <h2 class="news_heading mb-4">
                    Documentaries
                </h2>

                <?php foreach($data['documentaries'] as $documentary_chunk){
                    ?>
                    <div class="row doc_cards">
                    <?php
                        foreach($documentary_chunk as $documentary){
                        ?>

                            <div class="col-md-6 mb-3">
                                <div class="card" style="width: 100%;">
                                    <a href="<?php echo URLROOT; ?>SingleDocumentary/<?php echo $documentary['documentary_id'];?>">
                                        <img src="<?php echo URLROOT; ?>storage/images/<?php echo $documentary['thumbnail_image']; ?>" class="card-img-top" alt="...">
                                        <div class="image-overlay">
                                            <div class="watchnow">
                                                <i class="far fa-play-circle"></i>
                                            </div>
                                            <div class="info">
                                                <p><?php echo $documentary['title']; ?></p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>

                        <?php
                        }

                    ?>
                    </div>
                    <?php

                } ?>
            </div>


            <div class="col-md-5">
                <h2 class="news_heading">
                    Sponsored Post
                </h2>
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