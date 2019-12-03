<?php
class ManageModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function usersList()
    {
        $companies_id = Session::get('company');
        $dbh = $this->database->prepare("SELECT id, username, password, isActive, role FROM users WHERE companies_id = :companies_id"); 
        $dbh->execute(array(
            ':companies_id' => $companies_id
        ));
        $data = $dbh->fetchAll();

        return $data;
    }

    public function singleUserList($id)
    {
        $dbh = $this->database->prepare("SELECT id, username, password, isActive, role FROM users WHERE id = :id"); 
        $dbh->execute(array(
            ':id' => $id
        ));
        $data = $dbh->fetch();

        return $data;
    }

    public function create()
    {
        $companies_id = Session::get('company');
        $data = array();
        $data['username'] = $_POST['username'];
        $data['role'] = $_POST['role'];
        $dbh = $this->database->prepare("INSERT INTO users (companies_id, username, role) VALUES (:companies_id, :username, :role)"); 
        $dbh->execute(array(
            ':companies_id' => $companies_id,
            ':username' => $data['username'],
            ':role' => $data['role']
        ));
    }

    public function confirmEdit($id)
    {
        $data = array();
        $data['username'] = $_POST['username'];
        $data['role'] = $_POST['role'];
        $data['status'] = $_POST['status'];
        $dbh = $this->database->prepare("UPDATE users SET username = :username, role = :role, isActive = :isActive WHERE id = :id"); 
        $dbh->execute(array(
            ':username' => $data['username'],
            ':role' => $data['role'],
            ':isActive' => $data['status'],
            ':id' => $id
        ));
        print_r($id);
        print_r($data);
    }

    public function delete($id)
    {
        $dbh = $this->database->prepare("DELETE FROM users WHERE id = :id"); 
        $dbh->execute(array(
            ':id' => $id
        ));
    }
}