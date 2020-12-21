<?php


class model_product extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function productInfo($id)
    {
        $sql = "select * from product where id=?";
        $value = [$id];
//        $stmt = self::$connection->prepare($sql);
//        $stmt->bindParam(1, $id);
//        $stmt->execute();
//        $result = $stmt->fetch();
        $result = $this->runSelect($sql, $value, 1);
        $price = $result['price'];
        $discount = $result['discount'];
        $discountedPrice = $this->getDiscount($price, $discount);
        $result['discountedPrice'] = $discountedPrice;
        return $result;
    }

    function getStudy($id)
    {
        $sql = "select * from study where id_product=?";
        $result = $this->runSelect($sql, [$id]);
        return $result;
    }

    function getFeatures($categoryId, $productId)
    {
        $sql1 = "select * from attribute where category_id=? and parent_id=0";
        $result1 = $this->runSelect($sql1, [$categoryId]);

        foreach ($result1 as $key => $row) {
            $sql2 = "select attribute.name,product_attr.value from attribute left join product_attr on attribute.id=product_attr.id_attribute and product_attr.id_product=? where attribute.parent_id=?";
            $result2 = $this->runSelect($sql2, [$productId, $row['id']]);
            $result1[$key]['children'] = $result2;
        }
        return $result1;
    }

    function getComments($productId)
    {
        $sql = "select * from comment where id_product=?";
        $result = $this->runSelect($sql, [$productId]);
        return $result;
    }

    function getProductImages($productId)
    {
        $sql = "select * from product_gallery where id_product=?";
        $result = $this->runSelect($sql, [$productId]);

        return $result;
    }

}