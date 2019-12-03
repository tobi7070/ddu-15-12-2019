<?php
class Quiz extends Controller
{
    public function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if (!$logged == true) {
            Session::destroy();
            header('location: ./login');
            exit();
        }

        // $this->view->script = array("profile/js/script.js");
    }

    public function index()
    {
        $this->view->render("quiz/index");
    }
    
    public function getQuestions()
    {
        $this->model->getQuestions();
    }

    public function getAnswers()
    {
        $this->model->getAnswers();
    }

    public function getResults()
    {
        $this->model->getResults();
    }
}