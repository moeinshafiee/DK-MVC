<?php

class Product extends Controller
{
    function __construct()
    {
    }

    function index($id)
    {
        $productInfo = $this->model->productInfo($id);
        $gallery = $this->model->getProductImages($id);
        $data = [$productInfo, $gallery];

        $this->view('product/index', $data);
    }

    function tab($id, $categoryId)
    {
        $tabNumber = $_POST['num'];
        if ($tabNumber == 0) {
            $study = $this->model->getStudy($id);
            $data = [$study];
            $this->view('product/study-tab', $data, 1, 1);
        }

        if ($tabNumber == 1) {
            $features = $this->model->getFeatures($categoryId, $id);
            $data = [$features];
            $this->view('product/features-tab', $data, 1, 1);
        }
        if ($tabNumber == 2){
            $comments = $this->model->getComments($id);
            $data = [$comments];
            $this->view('product/comments-tab', $data, 1, 1);
        }

    }
}

?>