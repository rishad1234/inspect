<?php require_once('inc/header.php');?>
<?php echo $data['error']; ?>
<div class="container section_space">
        <div class="row">
            <div class="col-lg-4">
                <div class="news_state">
                    <h3>Available Feature for you</h3>
                </div>
                
                <div class="boxesAdd">
                    <a href="<?php echo URLROOT; ?>getHired">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Get Hired !!</h5>
                                <p class="card-text">Get Job posts from various tonotch local and global companies like
                                    NewsCred, Grameenphone etc. Match with your requirement and see yourself where you
                                    blen
                                    in perfectly.</p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="boxesAdd">
                    <a href="<?php echo URLROOT; ?>documentaries">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Original Documentaries</h5>
                                <p class="card-text">Let your knowledge grow by watching all the tech and business
                                    documentary from the big ceo's of silicon valley. Learn what they are up to and how
                                    they
                                    are impacting the world with revolutionary technology.</p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
            <div class="col-lg-8">

                <form class="mt-5 profileInfo" method="post" action="<?php echo URLROOT; ?>userProfile/saveUser" enctype="multipart/form-data">
                    <div class="news_state">
                        <h2>Profile Information</h2>
                    </div>

                    <div class="profile-picture">
                        <img src="<?php echo URLROOT; ?>storage/user_images/<?php echo $data['user']['user_image']; ?>" alt="">
                        <br><br>
                        <input type="file" name="user_image" id="fileToUpload" class="btn btn-outline-dark" accept="image/jpeg">
                    </div>


                    <div class="form-group mt-3">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['user']['email']; ?>" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Full name</label>
                        <input type="text" name="full_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                         value="<?php echo $data['user']['full_name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" minlength="8" value="<?php echo $_SESSION['password']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Age</label>
                        <input type="number" name="age" class="form-control" id="exampleInputPassword1" 
                        value="<?php 
                            if($data['user']['age'] == 0){

                            }else{
                                echo $data['user']['age'];
                            }
                             ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Organization</label>
                        <input type="text" name="organization" class="form-control" id="exampleInputPassword1" value="<?php echo $data['user']['organization']; ?>" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="address" class="form-control" id="exampleInputPassword1" value="<?php echo $data['user']['address']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" id="exampleInputPassword1" value="<?php echo $data['user']['phone_number']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Gender</label>
                        <select class="form-control" name="gender" id="exampleFormControlSelect1" required>
                        <?php if($data['user']['gender'] == 'M' || $data['user']['gender'] == ''){
                            ?>
                                <option>Male</option>
                                <option>Female</option>
                            <?php
                        }else{
                            ?>
                                <option>Female</option>
                                <option>Male</option>
                            <?php
                        } ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php require_once('inc/footer.php'); ?>