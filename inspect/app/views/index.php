<?php require_once('inc/header.php'); ?>

    <div class="container section_space news_state">
        <div class="row">
            <div class="col-sm-12">
                <h2>Categories</h2>
            </div>
        </div>
    </div>

    <div class="container section_space d-none d-md-block">
        <div class="row scrollmenu">


        <?php 
            foreach($data['news_categories'] as $category){
                ?>
                    <div class="col-md-2">
                        <div class="eachCategories">
                            <a href="<?php echo URLROOT; ?>CategoryType/<?php echo $category['category_id']; ?>"><?php echo $category['category']; ?></a>
                        </div>
                    </div>
                <?php
            }
        ?>
        </div>
    </div>

    <div class="container section_space news_state">
        <div class="row">
            <div class="col-sm-12">
                <h2>Top News</h2>
            </div>
        </div>
    </div>

    <div id="cover_news" class="container section_space">
        <div class="row">
            
        <?php foreach($data['top_news'] as $news) {
            ?>
                <div class="col-sm-6 news_left">
                    <a href="<?php echo URLROOT; ?>SingleNews/<?php echo $news['news_id'];?>">
                        <img src="<?php echo URLROOT; ?>storage/images/<?php echo $news['image']; ?>" alt="">
                        <br><br>
                        <h3><?php echo $news['title']; ?></h3>
                        <p><?php echo date_format(new DateTime($news['created_at']), 'jS F, Y'); ?></p>
                        <p class="content">
                            <?php echo $news['excerpt']; ?><span><b><a
                                        style="color:rgba(173, 39, 39, 0.897)" href="<?php echo URLROOT; ?>SingleNews/<?php echo $news['news_id'];?>"> Read
                                        More</a></b></span>
                        </p>
                    </a>

                </div>
            <?php
        }?>
        </div>
    </div>

    <!-- all news -->
    <div id="all_news" class="container section_space">
        <div class="row">
            <div class="col-md-7">
                <h2 class="news_heading">
                    Current News
                </h2>

                <?php
                    foreach($data['current_news'] as $news) {
                ?>
                <div class="row news_each mt-4">
                    <div class="col-md-4 news_each_img">
                        <img src="<?php echo URLROOT; ?>storage/images/<?php echo $news['image']; ?>" alt="">
                        <p><?php echo date_format(new DateTime($news['created_at']), 'jS F, Y'); ?></p>
                    </div>
                    <div class="col-md-8 news_each_heading">
                        <a href="<?php echo URLROOT; ?>SingleNews/<?php echo $news['news_id'];?>">
                            <p>
                                <?php echo $news['title']; ?>
                            </p>
                        </a>

                    </div>
                </div>
                <div class="row news_each_content">
                    <div class="col-md-12">
                        <p>
                           <?php echo $news['excerpt']; ?> <span><a href="<?php echo URLROOT; ?>SingleNews/<?php echo $news['news_id'];?>">
                                    Read
                                    More</a></span>
                        </p>
                        <hr>
                    </div>
                </div>

                <?php
                    }
                ?>

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