<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- css link -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>css/style.css">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <!-- font-family: 'Playfair Display', serif; -->
    <!-- font-family: 'Lato', sans-serif; -->


    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/1685df272a.js"></script>

    <title><?php echo $data['title'] ?></title>
</head>

<body>
    <!-- header -->
    <div id="header" class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="<?php echo URLROOT; ?>"><img src="<?php echo URLROOT; ?>images/Inspect-2.png" alt="logo"></a>
                <div class="get_started">
                    <!-- <span class="d-none d-lg-inline-block">
                        <form class="search-form">
                            <div class="input-group search-group">
                                <input type="text" class="form-control search-control"
                                    placeholder="Enter your search term...">
                            </div>
                        </form>
                    </span> -->

                <?php 
                if (isset($_SESSION['logged_in'])) {
                    if(strcmp($_SESSION['logged_in'], 'yes') == 0) {
                        ?>
                            <span><a href="user_profile.html"><img class="userProfile mr-2" src="<?php echo URLROOT;?>images/editor-3.jpg" alt=""></a></span>
                            <span><button type="button" class="btn btn-outline-dark signlink"><a class=""
                                        href="<?php echo URLROOT; ?>Logout">Log out</a></button></span>
                        <?php
                    }else{
                        ?>
                        <span><button type="button" class="btn btn-outline-dark signlink"><a class=""
                                    href="<?php echo URLROOT; ?>pages/signIn">Sign in</a></button></span>
                        <span><button type="button" class="btn btn-outline-dark signlink"><a class=""
                                    href="<?php echo URLROOT; ?>pages/signUp">Sign up</a></button></span>
                    <?php
                    }
                }else{
                    ?>
                        <span><button type="button" class="btn btn-outline-dark signlink"><a class=""
                                    href="<?php echo URLROOT; ?>pages/signIn">Sign in</a></button></span>
                        <span><button type="button" class="btn btn-outline-dark signlink"><a class=""
                                    href="<?php echo URLROOT; ?>pages/signUp">Sign up</a></button></span>
                <?php
                }?>
                </div>
            </div>
        </div>
    </div>

    <!-- navigation bar -->
    <div id="navbar" class="container mt-2">
        <div class="row">
            <div class="col-sm-12">
                <div class="scrollmenu">
                    <a href="<?php echo URLROOT; ?>" class="active">HOME</a>
                    <a href="<?php echo URLROOT; ?>aboutUs">ABOUT</a>
                    <a href="<?php echo URLROOT; ?>river">RIVER</a>
                    <?php
                    if (isset($_SESSION['logged_in'])) {
                        if(strcmp($_SESSION['logged_in'], 'yes') == 0){
                    ?>

                    <a href="events.html">EVENTS</a>
                    <a href="<?php echo URLROOT; ?>documentaries">DOCUMENTARIES</a>
                    <a href="get-hired.html">GET HIRED</a>

                        <?php
                        } 
                    }?>
                    <a href="<?php echo URLROOT; ?>contactUs">CONTACT</a>
                </div>
            </div>
        </div>
    </div>