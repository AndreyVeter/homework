<?include ("../blocks/db.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP первое дз</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form name="form1" method="post" action="rezult.php">
        <div class="dish">
            <lable for="dish-one">Первое блюдо</lable>
            <input type="text" name="dish_one" id="dish-one">
                <div class="quantity">
                    <select name="quantity_one">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

            <lable for="dish-two">Второе блюдо</lable>
            <input type="text" name="dish_two" id="dish-two">
            <div class="quantity">
                <select name="quantity_two">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <lable for="dish-three">Третье блюдо</lable>
            <input type="text" name="dish_three" id="dish-three">
            <div class="quantity">
                <select name="quantity_three">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <lable for="dish-four">Четвертое блюдо</lable>
            <input type="text" name="dish_four" id="dish-four">
            <div class="quantity">
                <select name="quantity_four">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <lable for="dish-five">Пятое блюдо</lable>
            <input type="text" name="dish_five" id="dish-five">
            <div class="quantity">
                <select name="quantity_five">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>

        <div class="price">
            <lable for="price-one">Цена за первое блюдо</lable>
            <input type="text" name="price_one" id="price-one" class="prices">

            <lable for="price-two">Цена за второе блюдо</lable>
            <input type="text" name="price_two" id="price-two" class="prices">

            <lable for="price-three">Цена за третье блюдо</lable>
            <input type="text" name="price_three" id="price-three" class="prices">

            <lable for="price-four">Цена за четвертое блюдо</lable>
            <input type="text" name="price_four" id="price-four" class="prices">

            <lable for="price-five">Цена за пятое блюдо</lable>
            <input type="text" name="price_five" id="price-five" class="prices">
        </div>
        <DIV class="submit">
            <select name="day">
                <option>Завтрак</option>
                <option>Обед</option>
                <option>Ужин</option>
            </select>
            <input type="submit" name="submit" value="Добавить">
        </DIV>
    </form>
    <form name="form2" method="post" action="add_meal.php" class="newB">
        <input type="submit" name="submit_new" value="Добавить новое блюдо">
    </form>
    <form name="form3" method="post" action="all_meal.php" class="Menu">
        <input type="submit" name="submit_new" value="Меню">
    </form>
</body>
</html>