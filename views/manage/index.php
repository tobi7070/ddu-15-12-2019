<h1>Manage</h1>
<hr>
<h2>Add users</h2>
<form action="<?php echo URL;?>manage/create" method="POST">
    <label for="username">Username</label>
    <input type="text" name="username" id="username"><br>
    <label for="role">Role</label>
    <select name="role" id="role">
        <option value="default">Default</option>
        <option value="admin">Admin</option>
    </select><br>
    <input type="submit">
</form>
<hr>
<h2>Current users</h2>
<table>
<?php
    foreach($this->usersList as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['id'] . '</td>';
        echo '<td>' . $value['username'] . '</td>';
        echo '<td>' . ucfirst($value['role']) . '</td>';
        echo '<td><a href="'.URL.'manage/edit/'.$value['id'].'">Edit</a> <a href="'.URL.'manage/delete/'.$value['id'].'">Delete</a></td>';
        echo '</tr>';
    }
?>
</table>
<hr>