<?php
class HttpError extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->render("httpError/index");
    }
}