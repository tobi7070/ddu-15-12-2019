<?php
class LoginModel extends Model
{
    public function __construct()
    {
        parent::__construct();
        echo "Login model was called...";
    }

    public function run()
    {
        $dbh = $this->database->prepare("SELECT id FROM users WHERE userid = :userid AND passwd = :passwd"); 
        $dbh->execute(array(
            ':userid' => $_POST['username'],
            ':passwd' => $_POST['password']
        ));

        // $data = $dbh->fetchAll();
        // print_r($data);

        $rows = $dbh->rowCount();

        if ($rows > 0) {
            Session::init();
            Session::set('loggedIn', true);
            header('location: ../profile');
        } else {
            header('location: ../login');
        }
    }
}