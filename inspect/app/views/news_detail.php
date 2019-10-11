<?php require_once('inc/header.php');?>
<div class="container section_space news_Heading">
        <div class="row">
            <div class="col-sm-8">
                <h1 style="font-family: 'Playfair Display', serif;">
                <?php echo $data['news']['title']; ?>
                </h1>
                <div class="publishDateTime">
                    <span><i class="far fa-calendar-alt"></i></span>
                    <span><?php echo date_format(new DateTime($data['news']['created_at']), 'jS F, Y'); ?></span>
                </div>
                <div class="share_news_socials">
                    <ul>
                        <li><a class="cool-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="cool-link" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="cool-link" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <br><br>
                <div class="news_cover_img">
                    <img src="<?php echo URLROOT; ?>storage/images/<?php echo $data['news']['image']; ?>" alt="">
                    <br>
                </div>
                <br>
                <div class="main_news">
                        <?php echo $data['news']['body']; ?>
                    <br><br>
                </div>

                <div class="similar_news">
                    <h3 class="news_heading">
                        Similar News
                    </h3>
                    <br><br>
                    <div class="row">
                    <?php foreach($data['similar_news'] as $news){
                    ?>
                        <div class="col-sm-4">
                            <img src="<?php echo URLROOT; ?>storage/images/<?php echo $news['image']; ?>" alt="">
                            <br>
                            <p class="font-weight-bold">
                                <a href="<?php echo URLROOT; ?>SingleNews/<?php echo $news['news_id'];?>">
                                    <?php echo $news['title']; ?>
                                </a>

                            </p>
                        </div>
                    <?php
                    } ?>
                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <h3 class="news_heading">
                    Sponsored Post
                </h3>
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