<?php
class Profile extends Controller
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

        $this->view->script = array("profile/js/script.js");
    }

    public function index()
    {
        $this->view->render("profile/index");
    }

    public function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit();
    }

    public function xhrInsert()
    {
        $this->model->xhrInsert();
    }
}