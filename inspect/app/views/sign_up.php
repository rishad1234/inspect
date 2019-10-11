<?php require_once('inc/header.php'); ?>

    <div class="container section_space signup-bg">
        <div class="row">
            <div class="col-md-6 signuppage">
                <h1 style="font-family: 'Playfair Display', serif; color: white" class="text-center mt-5">
                    <strong>JOIN INSPECT</strong>
                </h1>
                <p style="color: white; font-family: 'Lato', sans-serif;" class="text-center mt-4">
                    Share your ideas, Read blogs, Follow what other companies <br> are are offering
                    and generate value for your own work place. <br> A wonderful place to gather knowledge.
                </p>
                <form method="post" action="<?php echo URLROOT; ?>SignUp">
                    <div class="form-group">
                        <input type="text" class="form-control" id="companyName" placeholder="Enter Organization Name" name="organization" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                            placeholder="Enter email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required minlength="8">
                    </div>
                    <p style="font-family: 'Playfair Display', serif; color: white"><?php if($data['error']){
                        echo $data['error'];
                    }else{
                        echo '';
                    } ?></p>
                    <button type="submit" class="btn">Register</button><span><a class="cool-link" href="<?php echo URLROOT; ?>pages/signIn">Have an
                            acount? Sign in</a></span>
                </form>
            </div>
            <div class="col-md-6 signup-right">
                <h2>
                    By Signing Up, Get Access To

                </h2>
                <div class="card mt-3" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Get Hired !!</h5>
                        <p>
                            Get Job posts from various tonotch local and global companies like NewsCred, Grameenphone
                            etc.
                            Match with your requirement and see yourself where you blen in perfectly.
                        </p>
                    </div>
                </div>
                <div class="card mt-3" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Documentaries</h5>
                        <p>
                            Let your knowledge grow by watching all the tech and business documentary from the big ceo's of silicon valley.
                            Learn what they are up to and how they are impacting the world with revolutionary technology.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php require_once('inc/footer.php'); ?>