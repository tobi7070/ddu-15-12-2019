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
<div class="body">
    <div class="header">
    <header>
    <nav>
        <div class="nav-left">
            <ul>
                <?php Session::init(); ?>
                <li><a id="logo" href="<?php echo URL;?>"><b>Mit Arbejdsmiljø</b></a></li>
                <li><a href="<?php echo URL;?>">Forside</a></li>
                <?php if(Session::get('loggedIn') == true):?>
                <li><a href="<?php echo URL;?>profile">Min profil</a></li>
                <li><a href="<?php echo URL;?>quiz">Test dig selv</a></li>
                <?php if(Session::get('role') == 'admin'):?>
                <li><a href="<?php echo URL;?>manage">Administration</a></li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="nav-right">
            <ul>
                <li><a href="<?php echo URL;?>profile/logout">Log ud</a></li>
                <?php else:?>
            </ul>
        </div>
        <div class="nav-right">
            <ul>
                <li><a href="<?php echo URL;?>login">Log ind</a></li>
                <?php endif;?>
            </ul>
        </div>
    </nav>
    </header>
    </div>
    <div class="main">
    <main>