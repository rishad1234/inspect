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
                            <a href=""><?php echo $category['category'] ?></a>
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
                        <p><?php echo $news['created_at']; ?></p>
                        <p class="content">
                            <?php echo $news['excerpt']; ?><span><b><a
                                        style="color:rgba(173, 39, 39, 0.897)" href="<?php echo URLROOT; ?>SingleNews/<?php echo $news['news_id'];?>"> Read
                                        More</a></b></span>
                        </p>
                    </a>

                </div>
            <?php
        }?>
            <!-- <div class="col-sm-6 news_left">
                <a href="news_details.html">
                    <img src="storage/images/cover-1.jpg" alt="">
                    <br><br>
                    <h3>Analysis of 150B+ browser-based US Google searches in Q1 2019: only 41.45% resulted in organic
                        clicks to non-Google sites, and 48.96% ended without a click </h3>
                    <p>13th August, 2019</p>
                    <p class="content">
                        In December of 2018, Google’s CEO, Sundar Pichai, was asked a set of questions by the United
                        States
                        Congress. His responses left… a lot… to be desired. <span><b><a
                                    style="color:rgba(173, 39, 39, 0.897)" href="#"> Read
                                    More</a></b></span>
                    </p>
                </a>

            </div>
            <div class="col-sm-6 news_right">
                <a href="news_details.html">
                    <img src="images/cover-2.jpg" alt="">
                    <br><br>
                    <h3>Python is eating the world: How one developer's side project became the hottest programming
                        language
                        on the planet</h3>
                    <p>13th August, 2019</p>
                    <p class="content">
                        Frustrated by programming language shortcomings, Guido van Rossum created Python. With the
                        language
                        now used by millions, Nick Heath talks to van Rossum about Python's past and explores what's
                        next.
                        <span><b><a style="color:rgba(173, 39, 39, 0.897)" href="#"> Read More</a></b></span>
                    </p>
                </a>
            </div> -->
        </div>
    </div>

    <!-- all news -->
    <div id="all_news" class="container section_space">
        <div class="row">
            <div class="col-md-7">
                <h2 class="news_heading">
                    Current News
                </h2>
                <div class="row news_each mt-4">
                    <div class="col-md-4 news_each_img">
                        <img src="images/news-1.jpg" alt="">
                        <p>5:30 PM. 13th August, 2019 </p>
                    </div>
                    <div class="col-md-8 news_each_heading">
                        <a href="news_details.html">
                            <p>
                                AMD CEO talks about plans to quickly ramp up production of EPYC server chips, launched
                                this
                                week, and sustaining the advantage created by Intel's stumbles
                            </p>
                        </a>

                    </div>
                </div>
                <div class="row news_each_content">
                    <div class="col-md-12">
                        <p>
                            With Intel struggling to get to the next generation of chipmaking technology, AMD has an
                            opportunity to gain some ground on its longtime rival. <span><a href="news_details.html">
                                    Read
                                    More</a></span>
                        </p>
                        <hr>
                    </div>
                </div>


                <!-- 2nd news -->
                <div class="row news_each mt-4">
                    <div class="col-md-4 news_each_img">
                        <img src="images/news-2.jpg" alt="">
                        <p>5:30 PM. 13th August, 2019 </p>
                    </div>
                    <div class="col-md-8 news_each_heading">
                        <a href="news_details.html">
                            <p>
                                Facebook relaunches Oculus for Business, coming this fall, with a new software suite and
                                UX
                                customized for business use cases, adds support for the Oculus Quest
                            </p>
                        </a>

                    </div>
                </div>
                <div class="row news_each_content">
                    <div class="col-md-12">
                        <p>
                            At F8, Facebook announced a launch date for the Oculus Quest and Rift S, as well as
                            completely new enterprise-grade Oculus for Business software.
                            <span><a href="news_details.html"> Read
                                    More</a></span>
                        </p>
                        <hr>
                    </div>
                </div>

                <!-- 3rd news -->
                <div class="row news_each mt-4">
                    <div class="col-md-4 news_each_img">
                        <img src="images/news-3.jpg" alt="">
                        <p>5:30 PM. 13th August, 2019 </p>
                    </div>
                    <div class="col-md-8 news_each_heading">
                        <a href="news_details.html">
                            <p>
                                Synergy Research: enterprise SaaS revenue will hit $100B annual run rate in Q2, with
                                Microsoft, Salesforce, and Adobe accounting for nearly 40% of the market
                            </p>
                        </a>
                    </div>
                </div>
                <div class="row news_each_content">
                    <div class="col-md-12">
                        <p>
                            In its most recent report, Synergy Research, a company that monitors cloud marketshare,
                            found that enterprise SaaS revenue passed the $100 billion run rate this quarter <span><a
                                    href="news_details.html"> Read
                                    More</a></span>
                        </p>
                        <hr>
                    </div>
                </div>


                <!-- 4th news -->
                <div class="row news_each mt-4">
                    <div class="col-md-4 news_each_img">
                        <img src="images/news-4.jpg" alt="">
                        <p>5:30 PM. 13th August, 2019 </p>
                    </div>
                    <div class="col-md-8 news_each_heading">
                        <a href="news_details.html">
                            <p>
                                DeepMind execs talk about the importance of interdisciplinary research and how AI could
                                help
                                solve tough scientific problems, like predicting shapes of proteins
                            </p>
                        </a>
                    </div>
                </div>
                <div class="row news_each_content">
                    <div class="col-md-12">
                        <p>
                            DeepMind's AI has beaten chess grandmasters and Go champions. But founder and CEO Demis
                            Hassabis now has his sights set on bigger … <span><a href="news_details.html"> Read
                                    More</a></span>
                        </p>
                        <hr>
                    </div>
                </div>

                <!-- 5th news -->
                <div class="row news_each mt-4">
                    <div class="col-md-4 news_each_img">
                        <img src="images/news-5.jpg" alt="">
                        <p>5:30 PM. 13th August, 2019 </p>
                    </div>
                    <div class="col-md-8 news_each_heading">
                        <a href="news_details.html">
                            <p>
                                Source: the FTC's antitrust investigation into Facebook will focus on the company's core
                                social networking business
                            </p>
                        </a>
                    </div>
                </div>
                <div class="row news_each_content">
                    <div class="col-md-12">
                        <p>
                            New investigation is disclosed after record privacy settlement — Justice Department also
                            looking at conduct of tech companies — The U.S. Federal Trade Commission opened … <span><a
                                    href="news_details.html"> Read
                                    More</a></span>
                        </p>
                        <hr>
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