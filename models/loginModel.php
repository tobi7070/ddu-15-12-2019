<?php
class LoginModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        $dbh = $this->database->prepare("SELECT id FROM users WHERE username = :username AND password = :password"); 
        $dbh->execute(array(
            ':username' => $_POST['username'],
            ':password' => $_POST['password']
        ));

        $id = $dbh->fetchColumn(0);
        $name = $_POST['username'];
        
        $rows = $dbh->rowCount();

        if ($rows > 0) {
            $user_id = 
            Session::init();
            Session::set('loggedIn', true);
            Session::set('id', $id);
            Session::set('name', $name);
            header('location: ../profile');
        } else {
            header('location: ../login');
        }
    }
}