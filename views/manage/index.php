<h1>Administration</h1>
<br>
<h2>Tifløj bruger</h2>
<form action="<?php echo URL;?>manage/create" method="POST">
    <label for="username">Brugernavn:</label>
    <input type="text" name="username" id="username"><br>
    <label for="role">Rolle:</label>
    <select name="role" id="role">
        <option value="default">Default</option>
        <option value="admin">Admin</option>
    </select><br>
    <input type="submit" value="Bekræft">
</form>
<br>
<h2>Eskisterende brugere</h2>
<table>
<?php
    foreach($this->usersList as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['id'] . '</td>';
        echo '<td>' . $value['username'] . '</td>';
        echo '<td>' . ucfirst($value['role']) . '</td>';
        echo '<td><a href="'.URL.'manage/edit/'.$value['id'].'">Rediger</a> <a href="'.URL.'manage/delete/'.$value['id'].'">Slet</a></td>';
        echo '</tr>';
    }
?>
</table>
<br>