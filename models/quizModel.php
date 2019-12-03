<?php
class QuizModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function quizList()
    {
        $dbh = $this->database->prepare("SELECT id, name FROM quizzes"); 
        $dbh->execute();
        $data = $dbh->fetchAll();

        return $data;
    }

    public function takeQuiz($id)
    {
        $dbh = $this->database->prepare("SELECT id, question FROM questions WHERE quizzes_id = :quizzes_id"); 
        $dbh->execute(array(
            ':quizzes_id' => $id
        ));
        $data = $dbh->fetchAll();
        return $data;
    }

    public function saveResult($data)
    {
        $users_id = Session::get('id');
        $result = json_encode($data);
        $score = array_sum($data)/(count($data)*5);
        $dbh = $this->database->prepare("INSERT INTO results (users_id, result, score) VALUES (:users_id, :result, :score)");
        $dbh->execute(array(
            ':users_id' => $users_id,
            ':result' => $result,
            ':score'=> $score
        ));
        return $score;
    }
}