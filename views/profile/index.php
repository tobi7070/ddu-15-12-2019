<h1>Velkommen <?php echo ucfirst(Session::get('name'));?>!</h1>
<?php echo Session::get('role');echo Session::get('id');echo Session::get('company');?>

<p>Du er nu logget ind!</p>
<br>
<h2>Tilføj note</h2>
<form id="xhrInsert" action="<?php echo URL; ?>profile/xhrInsert/" method="post">
    <input type="text" name="text">
    <input type="submit">
</form>
<br>
<h2>Mine noter</h2>
<div id="listInserts"></div>