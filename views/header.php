<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/styles.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <?php
    if (isset($this->script)) {
        foreach($this->script as $script) {
            echo '<script type="text/javascript" src="'. URL . 'views/'. $script .'"></script>';
        }
    }
    ?>
</head>
<body>
    <header>
        <?php Session::init(); ?>
        This is the header...
        <?php if(Session::get('loggedIn') == true) : ?>
            <a href="<?php echo URL;?>profile/logout">Logout</a>
        <?php else : ?>
            <a href="<?php echo URL;?>login">Login</a>
        <?php endif; ?>
    </header>
    <main>