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

<?php require_once('inc/footer.php'); ?>