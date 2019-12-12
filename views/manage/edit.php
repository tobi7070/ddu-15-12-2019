<h2>Rediger bruger</h2>
<form action="<?php echo URL;?>manage/confirmEdit/<?php echo $this->user['id'];?>" method="POST">
    <label for="username">Brugernavn</label>
    <input type="text" name="username" id="username" value="<?php echo $this->user['username'];?>"><br>
    <label for="role">Rolle</label>
    <select name="role" id="role">
        <option value="default" <?php if ($this->user['role'] == 'default') echo 'selected';?>>Default</option>
        <option value="admin" <?php if ($this->user['role'] == 'admin') echo 'selected';?>>Admin</option>
    </select><br>
    <label for="status">Status</label>
    <select name="status" id="status">
        <option value="0" <?php if ($this->user['isActive'] == 0) echo 'selected';?>>Inaktiv</option>
        <option value="1" <?php if ($this->user['isActive'] == 1) echo 'selected';?>>Aktiv</option>
    </select><br>
    <input type="submit" value="Bekræft">
</form>