<?include ("../blocks/db.php");
if (isset($_POST['id'])) {$id=$_POST['id'];}
if (isset($_POST['name_dish'])) {$food=$_POST['name_dish'];}
if (isset($_POST['weight'])) {$weight=$_POST['weight'];}
if (isset($_POST['price'])) {$price=$_POST['price'];}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Редактировать</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<? $myrow_food=mysqli_query($db, "UPDATE menu SET food='$food', weight='$weight', price='$price' WHERE id=$id");
    if ($myrow_food==true){
        echo "<p> Блюдо $food обновлено</p>";
    } else {
        echo "<p> Блюдо не обновлено</p>";
    }
?>
<a href="index.php">На главную</a>
</body>
</html>