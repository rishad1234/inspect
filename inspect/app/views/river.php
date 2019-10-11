<?php require_once('inc/header.php');?>

<div class="container section_space news_state">
        <div class="row">
            <div class="col-sm-12">
                <h2>All News</h2>
            </div>
        </div>
    </div>

<div class="container section_space">
        <div class="row">

        <?php foreach($data['news_data']['dates'] as $dates) {
        ?>
            <div class="col-sm-12">
                <div class="each-date-section">
                    <h3><?php echo date_format(new DateTime($dates['created_at']), 'M d, Y'); ?></h3>
                    <br>
                    <ul>
        <?php
            foreach($data['news_data']['news'] as $news){
                if($dates['created_at'] == $news['created_at']){
                  ?>
                        <div class="row">
                            <div class="col-md-1 river-time"><?php echo date_format(new DateTime($news['created_at']), 'h:m A'); ?></div>
                            <div class="col-md-11">
                                <li><a href="#"><?php echo $news['title']; ?> </a>
                                </li>
                            </div>
                        </div>
                  <?php  
                }
            }
            ?>
            </div>
            </div>
            <?php
        }        
        ?>
        </div>
    </div>

            <!-- <div class="col-sm-12">
                <div class="each-date-section">
                    <h3>Oct 21, 2018</h3>
                    <br>
                    <ul>
                        <div class="row">
                            <div class="col-md-1 river-time">2:00 PM</div>
                            <div class="col-md-11">
                                <li><a href="#">Analysis of 150B+ browser-based US Google searches in Q1 2019: only
                                        41.45% resulted in organic
                                        clicks to non-Google sites, and 48.96% ended without a click </a>
                                </li>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-1 river-time">1:24 PM</div>
                            <div class="col-md-11">
                                <li><a href="#">Python is eating the world: How one developer's side project became the
                                        hottest programming
                                        language
                                        on the planet</a>
                                </li>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-1 river-time">7:14 PM</div>
                            <div class="col-md-11">
                                <li><a href="#">AMD CEO talks about plans to quickly ramp up production of EPYC server
                                        chips, launched
                                        this
                                        week, and sustaining the advantage created by Intel's stumbles</a>
                                </li>
                            </div>
                        </div>
                    </ul>
                </div>
                <br><br>
                <div class="each-date-section">
                    <h3>Oct 17, 2018</h3>
                    <br>
                    <ul>
                        <div class="row">
                            <div class="col-md-1 river-time">1:20 PM</div>
                            <div class="col-md-11">
                                <li><a href="#">Facebook relaunches Oculus for Business, coming this fall, with a new
                                        software suite and
                                        UX
                                        customized for business use cases, adds support for the Oculus Quest</a>
                                </li>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-1 river-time">4:24 PM</div>
                            <div class="col-md-11">
                                <li><a href="#">Synergy Research: enterprise SaaS revenue will hit $100B annual run rate
                                        in Q2, with
                                        Microsoft, Salesforce, and Adobe accounting for nearly 40% of the market</a>
                                </li>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-1 river-time">5:54 PM</div>
                            <div class="col-md-11">
                                <li><a href="#">DeepMind execs talk about the importance of interdisciplinary research
                                        and how AI could
                                        help
                                        solve tough scientific problems, like predicting shapes of proteins</a>
                                </li>
                            </div>
                        </div>
                    </ul>
                </div>
                <br><br>
                <div class="each-date-section">
                    <h3>Oct 16, 2018</h3>
                    <br>
                    <ul>
                        <div class="row">
                            <div class="col-md-1 river-time">2:42 PM</div>
                            <div class="col-md-11">
                                <li><a href="#">Source: the FTC's antitrust investigation into Facebook will focus on
                                        the company's core
                                        social networking business</a>
                                </li>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-1 river-time">1:21 PM</div>
                            <div class="col-md-11">
                                <li><a href="#">Google Fi - a phone plan, by Google </a>
                                </li>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-1 river-time">5:35 PM</div>
                            <div class="col-md-11">
                                <li><a href="#">Synergy Research: enterprise SaaS revenue will hit $100B annual run rate
                                        in Q2, with
                                        Microsoft, Salesforce, and Adobe accounting for nearly 40% of the market</a>
                                </li>
                            </div>
                        </div>
                    </ul>
                </div>
                <br><br>
                <div class="each-date-section">
                    <h3>Oct 13, 2018</h3>
                    <br>
                    <ul>
                        <div class="row">
                            <div class="col-md-1 river-time">6:28 PM</div>
                            <div class="col-md-11">
                                <li><a href="#">Adobe's After Effects adds Content-Aware Fill for videos, which can
                                        intelligently remove
                                        and
                                        replace objects in a scene</a>
                                </li>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-1 river-time">7:12 PM</div>
                            <div class="col-md-11">
                                <li><a href="#">Synergy Research: enterprise SaaS revenue will hit $100B annual run rate
                                        in Q2, with
                                        Microsoft, Salesforce, and Adobe accounting for nearly 40% of the market</a>
                                </li>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-1 river-time">2:25 PM</div>
                            <div class="col-md-11">
                                <li><a href="#">How Steve Jobs conceived the “bicycle for the mind” metaphor for the
                                        personal computer,
                                        which largely drove Apple's philosophy for decades</a>
                                </li>
                            </div>
                        </div>
                    </ul>
                </div>

            </div>
        </div>
    </div> -->

<?php require_once('inc/footer.php'); ?>