<?php
class model_admin extends Model
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        
    }
    function getCategory()
    {
        $sql = 'select * from category';
        return $result = $this->runSelect($sql);
//        return $result;
    }
}
?>
