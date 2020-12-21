<?php

class model_index extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function getFirstSlider()
    {
        $sql = "select * from first_slider";
        $result = $this->runSelect($sql);
        return $result;
    }
    function getOfferSlider()
    {
        $sql = "select * from product where offer=?";
        $value = [1];
        $result= $this->runSelect($sql, $value);
        foreach ($result as $key=>$row)
        {
            $discountedPrice = $this->getDiscount($row['price'], $row['discount']);
            $result[$key]['discounted_price'] = $discountedPrice;
        }
        return $result;
    }

    function getMostviewedSlider()
    {
        $sql = "select * from product order by view desc";
        $stmt = self::$connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

}


?>