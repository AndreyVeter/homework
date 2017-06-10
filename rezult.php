<?php
if (isset($_POST['dish_one'])) {$dish_one=$_POST['dish_one']; if ($dish_one=='') {unset($dish_one);}}
if (isset($_POST['dish_two'])) {$dish_two=$_POST['dish_two']; if ($dish_two=='') {unset($dish_two);}}
if (isset($_POST['dish_three'])) {$dish_three=$_POST['dish_three']; if ($dish_three=='') {unset($dish_three);}}
if (isset($_POST['dish_four'])) {$dish_four=$_POST['dish_four']; if ($dish_four=='') {unset($dish_four);}}
if (isset($_POST['dish_five'])) {$dish_five=$_POST['dish_five']; if ($dish_five=='') {unset($dish_five);}}
if (isset($_POST['price_one'])) {$price_one=$_POST['price_one']; if ($price_one=='') {unset($price_one);}}
if (isset($_POST['price_two'])) {$price_two=$_POST['price_two']; if ($price_two=='') {unset($price_two);}}
if (isset($_POST['price_three'])) {$price_three=$_POST['price_three']; if ($price_three=='') {unset($price_three);}}
if (isset($_POST['price_four'])) {$price_four=$_POST['price_four']; if ($price_four=='') {unset($price_four);}}
if (isset($_POST['price_five'])) {$price_five=$_POST['price_five']; if ($price_five=='') {unset($price_five);}}
if (isset($_POST['day'])) {$day=$_POST['day']; if ($day=='') {unset($day);}}

$sale;
$discount_amount;
$itog=$price_one+$price_two+$price_three+$price_four+$price_five;

if ($itog>100 && $itog<=105) {$discount_amount=100;}
elseif($itog>105 && $itog<=150) {$discount_amount=$itog * 0.95;}
elseif($itog>150 && $itog<=155) {$discount_amount=150;}
elseif($itog>155 && $itog<=200) {$discount_amount=$itog * 0.93;}
elseif($itog>200 && $itog<=202) {$discount_amount=200;}
elseif($itog>202 && $itog<=210) {$discount_amount=$itog * 0.90;}

if ($itog>100 && $itog<=105) {$sale=$itog-100;}
elseif($itog>105 && $itog<=150) {$sale=$itog*0.05;}
elseif($itog>150 && $itog<=155) {$sale=$itog-150;}
elseif($itog>155 && $itog<=200) {$sale=$itog*0.07;}
elseif($itog>200 && $itog<=202) {$sale=$itog-200;}
elseif($itog>202 && $itog<=210) {$sale=$itog*0.1;}
else{$sale=0;}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP первое дз</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="dish dish-rezult">
    <p><?=$dish_one?></p>
    <p><?=$dish_two?></p>
    <p><?=$dish_three?></p>
    <p><?=$dish_four?></p>
    <p><?=$dish_five?></p>
</div>
<div class="price price-rezult">
    <p><?=$price_one?></p>
    <p><?=$price_two?></p>
    <p><?=$price_three?></p>
    <p><?=$price_four?></p>
    <p><?=$price_five?></p>
</div>
<div class="submit">
    <p><?=$day?></p>
    <p class="itog">Итог: <?echo $itog;?> руб.</p>
    <p class="discount_amount">Сумма скидки: <?echo $sale;?> руб.</p>
    <p class="sale">Сумма со скидкой: <?echo $discount_amount;;?> руб.</p>
</div>
</body>
</html>
