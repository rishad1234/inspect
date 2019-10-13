<?php require_once('inc/header.php');?>
<div class="container section_space">
        <div class="row">
            <div class="col-md-6 about-inspect">
                <h1 style="display: inline-block; border-bottom:2px solid #1e1d1d">About Inspect</h1>
                <br><br>
                    <?php echo $data['about_p']['content']; ?>
                <div class="co-founders section_space">
                    <h1 style="display: inline-block; border-bottom:2px solid #1e1d1d">Co-founders</h1>
                </div>
                <div class="row section_space">

                <?php foreach($data['co_founders'] as $co_founders){
                    ?>
                    <div class="col-md-6">
                        <img class="shafayet" src="<?php echo URLROOT; ?>storage/co_founders/<?php echo $co_founders['image']; ?>" alt="">

                        <p style="margin-top:10px;">
                            <?php echo $co_founders['co_founder_name'] ?> <br>
                            <b>Co-founder</b><br>
                        </p>
                    </div>
                    <?php
                } ?>
                    <!-- <div class="col-md-6">
                        <img class="shafayet" src="images/img-1.jpg" alt="">

                        <p style="margin-top:10px;">
                            Shafayet Ul Islam <br>
                            <b>Co-founder</b><br>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img class="rishad" src="images/img-2.JPG" alt="">

                        <p style="margin-top:10px;">
                            Rishadul Islam Khan <br>
                            <b>Co-founder</b><br>
                        </p>
                    </div> -->
                </div>
            </div>
            <div class="col-md-6">
                <h1 style="display: inline-block; border-bottom:2px solid #1e1d1d">Editors Panel</h1>
                <br><br>
                <div class="editor-panel">
                    <div class="row">
                        <?php foreach($data['editor'] as $editor_chunk){
                            ?>
                            <div class="col-sm-4 ">
                            <?php
                            foreach($editor_chunk as $editor){
                                ?>
                                    
                                        <div class="editor-images">
                                            <img src="<?php echo URLROOT; ?>storage/editor/<?php echo $editor['image']; ?>" alt="">
                                            <p style="margin-top:10px;">
                                                <?php echo $editor['editor_name']; ?> <br>
                                            </p>
                                        </div>
                                <?php
                            }
                            ?>
                            </div>
                            <?php
                        } ?>
                        <!-- <div class="col-sm-4 ">
                            <div class="editor-images">
                                <img src="images/editor-1.jpg" alt="">
                                <p style="margin-top:10px;">
                                    Sinthia <br>
                                </p>
                            </div>
                            <div class="editor-images">
                                <img src="images/editor-3.jpg" alt="">
                                <p style="margin-top:10px;">
                                    Emma <br>
                                </p>
                            </div>
                            <div class="editor-images">
                                <img src="images/editor-2.jpg" alt="">
                                <p style="margin-top:10px;">
                                    Jessy <br>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="editor-images">
                                <img src="images/editor-4.jpg" alt="">
                                <p style="margin-top:10px;">
                                    Samantha <br>
                                </p>
                            </div>
                            <div class="editor-images">
                                <img src="images/editor-5.jpg" alt="">
                                <p style="margin-top:10px;">
                                    Ron <br>
                                </p>
                            </div>
                            <div class="editor-images">
                                <img src="images/editor-6.jpg" alt="">
                                <p style="margin-top:10px;">
                                    Joseph <br>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="editor-images">
                                <img src="images/editor-7.jpg" alt="">
                                <p style="margin-top:10px;">
                                    Warner <br>
                                </p>
                            </div>
                            <div class="editor-images">
                                <img src="images/editor-8.jpg" alt="">
                                <p style="margin-top:10px;">
                                    Rebbeca <br>
                                </p>
                            </div>
                            <div class="editor-images">
                                <img src="images/editor-9.jpg" alt="">
                                <p style="margin-top:10px;">
                                    Gordon <br>
                                </p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php require_once('inc/footer.php'); ?>