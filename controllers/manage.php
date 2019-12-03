<?php
class Manage extends Controller
{
    public function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        $role = Session::get('role');
        if ($logged == false || $role != 'admin') {
            Session::destroy();
            header('location: ./login');
            exit();
        }
    }

    public function index()
    {
        $this->view->usersList = $this->model->usersList();
        $this->view->render("manage/index");
    }

    public function create()
    {
        $this->model->create();
        header('location: '.URL.'manage');
    }

    public function edit($id)
    {
        $this->view->user = $this->model->singleUserList($id);
        $this->view->render("manage/edit");
    }

    public function confirmEdit($id)
    {
        $this->model->confirmEdit($id);
        header('location: '.URL.'manage');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('location: '.URL.'manage');
    }
}