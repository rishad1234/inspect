<?php require_once('inc/header.php');?>


    <div class="container section_space">
        <div class="row">
            <div class="col-md-12 signuppage signinpage">
                <h1 style="font-family: 'Playfair Display', serif; color: white" class="text-center mt-5">
                    <strong>JOIN INSPECT</strong>
                </h1>
                <p style="color: white; font-family: 'Lato', sans-serif;" class="text-center mt-4">
                    Share your ideas, Read blogs, Follow what other companies <br> are are offering
                    and generate value for your own work place. <br> A wonderful place to gather knowledge.
                </p>
                <form class="signinform" method="post" action="<?php echo URLROOT; ?>SignIn"> 
                    
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                            placeholder="Enter email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
                    </div>
                    <p><?php if($data['error']){
                        echo $data['error'];
                    }else{
                        echo '';
                    } ?></p>
                    <button type="submit" class="btn">Sign in</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script>
        $(".signuppage").css("height", $(window).height() - $("#header").height() - 100);
    </script>



<?php require_once('inc/footer.php'); ?>