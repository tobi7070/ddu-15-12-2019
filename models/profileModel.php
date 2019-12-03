<?php
class ProfileModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function xhrInsert()
    {
        $users_id = Session::get('id');
        $text = $_POST['text'];

        $dbh = $this->database->prepare("INSERT INTO notes (users_id, text) VALUES (:users_id, :text)"); 
        $dbh->execute(array(
            ':users_id' => $users_id,
            ':text' => $text
        ));
        $data = array(
            'id' => $this->database->lastInsertId(),
            'text' => $text
        );
        echo json_encode($data);
    }

    public function xhrGetInserts()
    {
        $users_id = Session::get('id');

        $dbh = $this->database->prepare("SELECT * FROM notes WHERE users_id = :users_id");
        $dbh->setFetchMode(PDO::FETCH_ASSOC);
        $dbh->execute(array(
            ':users_id' => $users_id
        ));
        $data = $dbh->fetchAll();
        echo json_encode($data);
    }

    public function xhrRemoveInsert()
    {
        $id = $_POST['id'];
        $dbh = $this->database->prepare("DELETE FROM notes WHERE id = :id");
        $dbh->execute(array(
            ':id' => $id
        ));   
    }
}