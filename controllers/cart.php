<?php
class cart extends Controller
{
    function __construct()
    {
    }

    function index()
    {
        $this->view('cart/index');
    }
}
?>
