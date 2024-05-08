<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style6.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <div id="logo">
            <img src="images/oil.png">
            <div id="text">
                <a href="index.php">OIL</a>
            </div>
        </div>
        <div id="nav">
            <a href="index.php">Купить топливо</a>
            <a href="index.php">О компании</a>
            <a href="kontakti.php">Контакты</a>
            <a href="profil.php">Профиль</a>
        </div>
        <div id="buttons">
            <button id="button" onclick="location.href='avt.php'">Войти</button>
        </div>
        <div id="buttons2">
            <button id="button2" onclick="location.href='reg.php'">Зарегистрироваться</button>
        </div>
    </div>
    <hr width="100%">
    <div class="texttov">
        Дизельное топливо
    </div>
    <div class="info">
        <div class="text2">
            Ди́зельноето́пливо, смесь жидких углеводородов, получаемых из керосино=газойлевых фракций 
прямой перегонки нефти (tкип 200–350 °C) или в процессах крекинга нефти, а также синтетическим путём и используемых в дизельном двигателе внутреннего
сгорания.
        </div>
        <div class="text3">
            <span><b>Осталось на складе:</b> <?php
            // Подключение к базе данных
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "oil";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Проверка соединения
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Выбор данных из таблицы "учет автотранспорта"
            $sql = "SELECT * FROM `nazvanie & kolichestvo nefteprodukta` where Naimenovanie = 'Дизель'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Вывод данных каждой строки
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row['Kolichestvo']."</td>";
                    
                    echo "</tr>";
                }
            } else {
                echo "0 результатов";
            }
            $conn->close();
        ?>т</span>
            
            <span><b>Цена за тонну:</b> <?php
            // Подключение к базе данных
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "oil";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Проверка соединения
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Выбор данных из таблицы "учет автотранспорта"
            $sql = "SELECT * FROM `nazvanie & kolichestvo nefteprodukta` where Naimenovanie = 'Дизель'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Вывод данных каждой строки
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row['Cena za shtuku']."</td>";
                    echo "</tr>";
                }
            } else {
                echo "0 результатов";
            }
            $conn->close();
        ?>р</span>
        </div>
        <button type="button" class="button3">
            Купить
        </button>
    </div>
    <div class="imgt">

    </div>
</body>
</html>