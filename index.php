<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>ДМ 3</title>
</head>

<body>
    <form method="post">
        <h1>Функции</h1>
        <h3>Примеры</h3>
        <p>Первый пример:<br>
        0 0 0 1<br>
        0 0 1 1<br>
        0 0 0 1<br>
        0 1 0 0</p>
        <p>Второй пример:<br>
            0 0 0 1<br>
            1 0 0 0<br>
            0 0 0 1<br>
            0 0 1 0</p>
        <p><input  type="text" class="" name="00" />
            <input  type="text" class="" name="01" />
            <input  type="text" class="" name="02" />
            <input  type="text" class="" name="03" /></p>

        <p><input  type="text" class="" name="10" />
            <input  type="text" class="" name="11" />
            <input  type="text" class="" name="12" />
            <input  type="text" class="" name="13" /></p>

        <p><input  type="text" class="" name="20" />
            <input  type="text" class="" name="21" />
            <input  type="text" class="" name="22" />
            <input  type="text" class="" name="23" /></p>

        <p><input  type="text" class="" name="30" />
            <input type="text" class="" name="31" />
            <input  type="text" class="" name="32" />
            <input  type="text" class="" name="33" /></p><br />

        <input type="submit" value="Проверка" onClick="getDataUser()" />
    </form>

    <?php
    $arr;
    if ($_POST['00'] != "") {
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 4; $j++) {
                if ($_POST[$i . $j] == "") {
                    echo ("Введены не все элементы <br> ");
                    return ;
                }
                $arr[$i][$j] = $_POST[$i . $j];
            }
        }
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 4; $j++) {
                if (!(($arr[$i][$j] == "0") or ($arr[$i][$j] == "1"))){
                    echo("Ошибка в элементе ".$i.$j);
                }
            }
        }
        for ($i = 0; $i < 4; $i++) {
            $k = 0;
            for ($j = 0; $j < 4; $j++) {
                if ($arr[$i][$j] == "1") $k++;
            }
            if ($k != 1) {
                echo ("Отношение не является функцией");
                return;
            }
        }
        echo("Отношение является функцией");
        return;
    }

    ?>



</body>

</html>