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
                    <div class="each_sponsor">
                        <img src="images/logo-1.png" alt="">
                        <br><br>
                        <a class="sponsor_link_home" href="news_details.html">
                            <h5>Google Fi - a phone plan, by Google </h5>
                        </a>


                        <p>We felt that most phone plans just weren't made with you in mind. So that's why we built
                            Google
                            Fi with features that real people actually want. Click to learn more. <span><a
                                    href="news_details.html">
                                    More</a></span>
                        </p>
                        <hr>
                    </div>
                    <!-- 2nds -->
                    <div class="each_sponsor">
                        <img src="images/logo-2.png" alt="">
                        <br><br>
                        <a class="sponsor_link_home" href="news_details.html">
                            <h5>Adobe's After Effects adds Content-Aware Fill for videos, which can intelligently remove
                                and
                                replace objects in a scene </h5>
                        </a>

                        <p>We felt that most phone plans just weren't made with you in mind. So that's why we built
                            Google
                            Fi with features that real people actually want. Click to learn more. <span><a
                                    href="news_details.html">
                                    More</a></span>
                        </p>
                        <hr>
                    </div>

                    <!-- 3rd -->
                    <div class="each_sponsor">
                        <img src="images/logo-3.png" alt="">
                        <br><br>
                        <a class="sponsor_link_home" href="news_details.html">
                            <h5>How Steve Jobs conceived the “bicycle for the mind” metaphor for the personal computer,
                                which largely drove Apple's philosophy for decades</h5>
                        </a>


                        <p>“When we invented the personal computer, we created a new kind of bicycle...a new man-machine
                            partnership...a new generation of entrepreneurs." <span><a href="news_details.html">
                                    More</a></span>
                        </p>
                        <hr>
                    </div>

                    <!-- 4th -->
                    <div class="each_sponsor">
                        <img src="images/logo-4.png" alt="">
                        <br><br>
                        <a class="sponsor_link_home" href="news_details.html">
                            <h5>Google Fi - a phone plan, by Google </h5>
                        </a>

                        <p>We felt that most phone plans just weren't made with you in mind. So that's why we built
                            Google
                            Fi with features that real people actually want. Click to learn more. <span><a
                                    href="news_details.html">
                                    More</a></span>
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once('inc/footer.php'); ?>