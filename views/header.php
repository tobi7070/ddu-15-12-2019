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
        Dette er "header"...
        <a href="<?php echo URL;?>">Forside</a>
        <?php if(Session::get('loggedIn') == true):?>
            <a href="<?php echo URL;?>profile">Min profil</a>
            <a href="<?php echo URL;?>quiz">Test dig selv</a>
            <?php if(Session::get('role') == 'admin'):?>
            <a href="<?php echo URL;?>manage">Administration</a>
            <?php endif; ?>
            <a href="<?php echo URL;?>profile/logout">Log ud</a>
        <?php else:?>
        <a href="<?php echo URL;?>login">Log ind</a>
        <?php endif;?>
    </header>
    <main>