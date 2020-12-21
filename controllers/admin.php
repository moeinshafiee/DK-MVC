<?php
class Admin extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->view('admin/index', [], 1, 1);
    }
    function category()
    {
        $categories = $this->model->getCategory();
        $data = [$categories];
        $this->view('admin/category', [$categories], 1, 1);
    }
}

?>