<?php require_once('inc/header.php');?>
<div class="container section_space news_Heading">
        <div class="row">
            <div class="col-sm-8">
                <h1 style="font-family: 'Playfair Display', serif;">
                <?php echo $data['news']['title']; ?>
                </h1>
                <div class="publishDateTime">
                    <span><i class="far fa-calendar-alt"></i></span>
                    <span><?php echo $data['news']['created_at']; ?></span>
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
                        <div class="col-sm-4">
                            <img src="images/news-2.jpg" alt="">
                            <br>
                            <p class="font-weight-bold">
                                <a href="news_details.html">
                                    DeepMind execs talk about the importance of interdisciplinary research and how AI
                                    could
                                    help
                                    solve tough scientific problems, like predicting shapes of proteins
                                </a>

                            </p>
                        </div>
                        <div class="col-sm-4">
                            <img src="images/news-1.jpg" alt="">
                            <br>
                            <p class="font-weight-bold">
                                <a href="news_details.html">
                                    Source: the FTC's antitrust investigation into Facebook will focus on the company's
                                    core
                                    social networking business
                                </a>

                            </p>
                        </div>
                        <div class="col-sm-4">
                            <img src="images/news-3.jpg" alt="">
                            <br>
                            <p class="font-weight-bold">
                                <a href="news_details.html">
                                    Synergy Research: enterprise SaaS revenue will hit $100B annual run rate in Q2, with
                                    Microsoft, Salesforce, and Adobe accounting for nearly 40% of the market
                                </a>

                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <h3 class="news_heading">
                    Sponsored Post
                </h3>
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