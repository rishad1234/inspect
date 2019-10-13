<?php require_once('inc/header.php');?>
<div class="container section_space">
        <div class="row">
            <div class="col-md-8">
                <h2 class="news_heading">
                    Documentaries
                </h2>
                <!-- row 1 -->
                <div style="margin-top:30px;" class="row contain_video mb-5">
                    <div class="col-md-12 ">
                        <a href="#">
                            <video id="hero-video" width="100%" controls>
                                <source src="<?php echo URLROOT; ?>storage/videos/<?php echo $data['documentary']['documentary_video']; ?>" type="video/mp4">
                            </video>
                            <div class="video_wrapper">
                                <!-- <div class="watchnow">
                                    <i class="far fa-play-circle play_vid"></i>
                                </div> -->
                            </div>
                        </a>
                    </div>
                </div>

                <h2 class="news_heading">
                    Similar Documentaries
                </h2>
                <?php foreach($data['similar_documentaries'] as $similar_documentaries_chunk){
                    ?>
                    <div class="row doc_cards">
                    <?php
                        foreach($similar_documentaries_chunk as $documentary){
                            ?>
                                <div class="col-md-6 mt-2">
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
            <div class="col-md-4">
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