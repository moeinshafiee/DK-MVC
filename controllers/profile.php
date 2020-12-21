<?php


class profile extends Controller
{
    function __construct()
    {
    }
    function index()
    {
        $this->view('profile/index');
    }
}