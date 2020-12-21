<?php

class Controller
{

    function __construct()
    {
        # code...
    }

    function view($viewUrl, $data = [], $headeron = '', $footeron = '')
    {
        if ($headeron == '')
            require('header.php');
        else
            require('header1.php');

        require('views/' . $viewUrl . '.php');

        if ($footeron == '')
            require('footer.php');
        else
            require('footer1.php');
    }

    function model($modelUrl)
    {
        require('models/model_' . $modelUrl . '.php');
        $classname = 'model_' . $modelUrl;
        $this->model = new $classname();
    }
}

?>