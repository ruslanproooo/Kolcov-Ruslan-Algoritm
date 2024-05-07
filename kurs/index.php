<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
            <a href="#hrr">Купить топливо</a>
            <a href="#ok">О компании</a>
            <a href="kontakt.php">Контакты</a>
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
    <div class="content">
    <div class="text2">
        Компания OIL по покупке и продаже нефти
    </div>
    <div class="text3">
        На данном сайте вы можете приобрести различные виды топлива
    </div>
    <div id="buttons3">
        <button id="button3" onclick="location.href='#hrr'">Выбор топлива</button>
    </div>
    </div>
    <div class="img1">
        <img src="images/baza.jpg" width="900px" height="800px">
    </div>
    <hr id="hrr" width="90%" size="2px">
    <div class="pokup">
        <div id="text4">
            Покупка топлива
        </div>
       <div id="pok1">
            <div class="ic">
                <div class="png">
                <img src="images/diz.png" width="45px" height="45px">
                </div>
            </div>
            <div class="texta">
                <a href="tovar.php">Дизельное топливо</a>
            </div>
       </div>
       <div id="pok1">
            <div class="ic">
                <div class="png">
                    <img src="images/benz.png" width="45px" height="45px">
                    </div>
            </div>
            <div class="texta">
                <a href="tovar2.php">Бензин</a>
            </div>
       </div>
       <div id="pok1">
            <div class="ic">
                <div class="png">
                    <img src="images/shest.png" width="45px" height="45px">
                    </div>
            </div>
            <div class="texta">
                <a href="tovar3.php">Моторное масло</a>
            </div>
       </div>
       <div id="pok1">
            <div class="ic">
                <div class="png">
                    <img src="images/ker.png" width="45px" height="45px">
                    </div>
            </div>
            <div class="texta">
                <a href="tovar4.php">Керосин</a>
            </div>
       </div>
    </div>
    <div class="poisk">
        <input type="search" id="name" name="name" placeholder="Поиск"/>
    </div>
    <div id="buttons4">
        <button id="button4"><img src="images/poisk.png"></button>
    </div>
    <div class="okomp">
        <div id="ok">О компании</div>
    </div>
    <div class="o1">
        <div class="otext">
            <b>OIL - это молодая и перспективная нефтяная компания,</b>
специализирующаяся на добыче и продаже нефти. 
Компания была основана в 2015 году опытными 
специалистами нефтяной отрасли и за короткое время 
смогла завоевать доверие клиентов благодаря высокому 
качеству своей продукции и инновационным
технологиям добычи.
        </div>
        <div class="img2">
            <img id="img2" src="images/neft1.jpg" height="300px" width="100%">
        </div>
    </div>
    <div class="o1">
        <div class="img3">
            <img id="img3" src="images/neft2.jpg" height="300px" width="70%">
        </div>
        <div class="otext2">
            <b>Нефтекомпания активно инвестирует</b> в разработку
новых месторождений и постоянно совершенствует свои производственные
процессы, чтобы быть лидером на рынке нефтепродуктов.
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Все права защищены</p>
    </footer>
</body>
</html>