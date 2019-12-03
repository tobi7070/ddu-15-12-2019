<?php
class Quiz extends Controller
{
    public function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        $role = Session::get('role');
        if ($logged == false) {
            Session::destroy();
            header('location: ./login');
            exit();
        }
    }

    public function index()
    {
        $this->view->quizList = $this->model->quizList();
        $this->view->render("quiz/index");
    }

    public function takeQuiz($id)
    {
        $this->view->takeQuiz = $this->model->takeQuiz($id);
        $this->view->render("quiz/takeQuiz");
    }

    public function saveResult($id)
    {
        $data = array();
    }
}