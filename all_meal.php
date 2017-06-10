<?include ("../blocks/db.php");
if (isset($_GET['id'])) {$id=$_GET['id'];}
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
<?if (isset($id)):?>
<h1>Внесите изменения</h1>
<? 
    $myrow_food=mysqli_query($db,"SELECT * FROM menu WHERE id='$id'");
    $rezult=mysqli_fetch_array($myrow_food);
    $time_id=$rezult['time_id'];
?>
<form name="edit_meal" method="post" action="edit_meal.php">
    <div class="new_blud price">
        <lable for="food" >Название блюда</lable>
        <input id="food" class="new_dish" type="text" name="food" value=<?=$rezult['food']?>>
        <lable for="weight">Вес нового блюда</lable>
        <input type="text" id="weight" name="weight" class="new_dish" value=<?=$rezult['weight']?>>
        <lable for="price">Цена</lable>
        <input type="text" name="price" id="price" class="new_dish" value=<?=$rezult['price']?>>
        <input id="id" type="hidden" name="id" value=<?=$id?>>
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
        <input type="submit" name="submit" value="сохранить" class="sox">
    </div>
</form>
<?else:?>
<?
    $myrow_all_meal=mysqli_query($db, "SELECT * FROM menu");
    $rezult_all_meal=mysql_fetch_array($myrow_all_meal);
    do {
        printf("<p><a href='all_meal.php?id=%s'>%s %s %s %s</a></p>", $rezult_all_meal['id'], $rezult_all_meal['name_dish'], $rezult_all_meal['price'], $rezult_all_meal['weight'], $rezult_all_meal['time_id']);
    }
    while ($rezult_all_meal=mysqli_fetch_array($myrow_all_meal));
    ?>
    <?endif?>
    <a href="index.php">На главную</a>
</body>
</html>