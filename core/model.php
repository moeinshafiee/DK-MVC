<?php 

class Model
{
    public static $connection;
	
	function __construct()
	{
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'digikala';
        self::$connection = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username, $password);
	}

    function runSelect($sql, $values=[], $fetch='', $fetchStyle =PDO::FETCH_ASSOC)
    {
        $temp = self::$connection->prepare($sql);
        foreach ($values as $index => $value) {
            $temp->bindValue($index + 1, $value);
        }
        $temp->execute();
        if ($fetch == '')
            $result = $temp->fetchAll($fetchStyle);
        else
            $result = $temp->fetch($fetchStyle);
        return $result;
    }

    function getDiscount($price, $discount)
    {
        $discountedPrice = ((100-$discount)*$price)/100;
        return $discountedPrice;
    }
}


 ?>