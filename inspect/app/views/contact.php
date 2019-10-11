<?php require_once('inc/header.php');?>

<div class="container section_space">
        <div class="row">
            <div class="col-md-7">
                <h2 class="news_heading">
                    Contact Us
                </h2>
                <form class="contact-form" method="post" action="<?php echo URLROOT; ?>ContactUs/contactSubmit">
                    <div class="form-group">
                        <label for="">Enter Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="">Enter email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                    </div>
                    <div class="">
                        <label for="">Enter your message</label>
                        <br>
                        <textarea name="message" id="" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-outline-dark mt-3 mb-5">Submit</button>
                </form>



                <h3 class="news_heading">
                    Contact Us In Social Media
                </h3>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="eachCategories">
                            <a href="#">Facebook</a>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="eachCategories">
                            <a href="#">Instagram</a>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="eachCategories">
                            <a href="#">Twitter</a>

                        </div>
                    </div>
                </div>





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