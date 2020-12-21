<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="/digikala/public/js/jquery-3.4.1.min.js"></script>
</head>
<body>
<?php

function getDiscount($price, $discount)
{
    $discountedPrice = ($discount*$price)/100;
    return $discountedPrice;
}
echo getDiscount(800,60);
?>

<button class="btn8">click</button>

<script>
    $('.btn8').click(function () {
        // alert('asas');
        var url = 'testt.php';
        var data = {'id': 2};
        $.post(url, data, function (ms) {
            alert(ms);
        });
    });
</script>


</body>
</html>