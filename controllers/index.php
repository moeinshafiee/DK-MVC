<?php

class Index extends Controller
{
    function __construct()
    {
        // echo "index controller";
    }

    function index()
    {
    	$firstSlider = $this->model->getFirstSlider();

    	$offerSlider = $this->model->getOfferSlider();

        $data = [$firstSlider, $offerSlider];
        $this->view('index/index', $data);
    }

}


?>
