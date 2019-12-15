<h1>Velkommen <?php echo ucfirst(Session::get('name'));?>!</h1>
<p>Du er nu logget ind!</p>
<br>
<h2>Tilføj note</h2>
<form id="xhrInsert" action="<?php echo URL; ?>profile/xhrInsert/" method="post">
    <input type="text" name="text"><br>
    <input type="submit" value="Gem">
</form>
<br>
<h2>Mine noter</h2>
<div id="listInserts"></div>