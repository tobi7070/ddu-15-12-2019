<?php
class LoginModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        $dbh = $this->database->prepare("SELECT id, companies_id, role FROM users WHERE username = :username AND password = :password"); 
        $dbh->execute(array(
            ':username' => $_POST['username'],
            ':password' => $_POST['password']
        ));

        $data = $dbh->fetch();
        $id = $data['id'];
        $company = $data['companies_id'];
        $role = $data['role'];

        // $id = $dbh->fetchColumn(0);
        $name = $_POST['username'];
        
        $rows = $dbh->rowCount();

        if ($rows > 0) {
            Session::init();
            Session::set('loggedIn', true);
            Session::set('id', $id);
            Session::set('name', $name);
            Session::set('role', $role);
            Session::set('company', $company);
            header('location: ../profile');
        } else {
            header('location: ../login');
        }
    }
}