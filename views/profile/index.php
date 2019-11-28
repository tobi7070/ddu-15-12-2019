<h1>Welcome <?php print_r($_SESSION['name']);?>!</h1>
<p>You have been logged in!</p>
<br>
<h2>Add notes</h2>
<form id="xhrInsert" action="<?php echo URL; ?>profile/xhrInsert/" method="post">
    <input type="text" name="text">
    <input type="submit">
</form>

<br>
<h2>My notes</h2>
<ul id="listInserts">

</ul>