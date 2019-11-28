<?php
class ProfileModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function xhrInsert()
    {
        $user_id = $_SESSION['id'];
        $text = $_POST['text'];

        $dbh = $this->database->prepare("INSERT INTO notes (user_id, text) VALUES (:user_id, :text)"); 
        $dbh->execute(array(
            ':user_id' => $user_id,
            ':text' => $text
        ));
    }

    public function xhrGetInserts() {
        $user_id = $_SESSION['id'];

        $dbh = $this->database->prepare("SELECT * FROM notes WHERE user_id = :user_id");
        $dbh->setFetchMode(PDO::FETCH_ASSOC);
        $dbh->execute(array(
            ':user_id' => $user_id
        ));
        $data = $dbh->fetchAll();
        echo json_encode($data);
    }
}