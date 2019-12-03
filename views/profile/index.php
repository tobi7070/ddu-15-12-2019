<h1>Welcome <?php echo ucfirst(Session::get('name'));?>!</h1>
<?php echo Session::get('role');echo Session::get('id');echo Session::get('company');?>

<p>You have been logged in!</p>
<br>
<h2>Add notes</h2>
<form id="xhrInsert" action="<?php echo URL; ?>profile/xhrInsert/" method="post">
    <input type="text" name="text">
    <input type="submit">
</form>
<br>
<h2>My notes</h2>
<div id="listInserts"></div>