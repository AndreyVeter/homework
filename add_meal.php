<?include ("../blocks/db.php");
if (isset($_POST['name_blud'])) {$food=$_POST['name_blud'];}
if (isset($_POST['weight'])) {$weight=$_POST['weight'];}
if (isset($_POST['price_new'])) {$price=$_POST['price_new'];}
if (isset($_POST['day_new'])) {$day_new=$_POST['day_new'];}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Добавить</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?if (isset($food) || isset($weight) || isset($price) || isset($day_new)):?>
<? $myrow_food=mysqli_query($db,"INSERT INTO menu(name_dish, price, weight, time_id) VALUES ('$food', '$price', '$weight', '$day_new')");
    if (isset ($myrow_food)){
    echo "<p>Блюдо $food добавлено, <a href='add_meal.php'>Добавить еще</a></p>";
    } else {
    echo "<p>Блюдо не добавлено</p>";
    }
?>
<?else:?>
<form name="form2" method="post" action="new_blud.php">
    <div class="new_blud price">
        <lable for="food" >Название блюда</lable>
        <input class="new_dish" type="text" name="food" id="food">
        <lable for="weight">Вес нового блюда</lable>
        <input type="text" name="weight" id="weight" class="new_dish">
        <lable for="price">Цена</lable>
        <input type="text" name="price" id="price" class="new_dish">
        <select name="day_new" class="day">
            <?
            $myrow=mysqli_query($db, "SELECT * FROM times");
            $rezult=mysqli_fetch_array($myrow);
            do{
                printf ("<option value=\"%s\">%s</option>", $rezult['id'], $rezult['times']);
            }
            while($rezult=mysqli_fetch_array($myrow));
            ?>
        </select>
        <input type="submit" name="submit_new_dish" value="Добавить новое блюдо" class="add">
        <a href='index.php'>вернуться в главное меню</a>
    </div>
<?endif?>
</form>
</body>
</html>