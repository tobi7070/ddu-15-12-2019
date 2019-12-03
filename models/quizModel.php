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
        // Save result to database
    }
    
}