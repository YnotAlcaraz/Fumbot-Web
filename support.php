<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="CSS/Style.css">
        <link rel="icon" href="/Img/pfp.PNG">
        <script src="/JavaScript/Script.js"></script>
        <title>Support - Fumbot</title>
    </head>
<body>
    <header>
        <div class="header__logo">
            <a href="index.html">
                <img src="/Img/pfp.PNG" alt="logo" class="header__logo__img">
            </a>
            <a href="index.html">
                <div class="header__logo__name">Fumbot</div>
            </a>
        </div>
        <div class="header__hamburger" onclick="menu()">
            <img src="/Img/lines.png" class="header__hamburger__lines" alt="lines">
        </div>
        <div class="header__navbar">
            <ul class="header__navbar__menu">
                <li class="header__navbar__menu__elem"><a href="index.html" class="header__navbar__menu__elem__link">Home</a></li>
                <li class="header__navbar__menu__elem"><a href="commands.html" class="header__navbar__menu__elem__link">Commands</a></li>
                <li class="header__navbar__menu__elem"><a href="support.php" class="header__navbar__menu__elem__link">Support</a></li>
            </ul>
        </div>
    </header> 

    <div class="contenedorForm">
        <br><br><br>
        <h1 class="header">Support</h1>
        <hr>
        <br>
        <p class="texto">Have you encountered a bug while using our bot?<br>
            Have new ideas to improve its operation?<br>
            Please, tell us more :)
        </p>
        <br><br>
        <form action="#" method="post" name="form" id="form">
            
            <label for="email"><b>Type in your e-mail address.</b>
            </label><br>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <br><br>
            <label for="tipo">
                <b>What do you want to talk about?</b> 
            </label><br>
            <input type="radio" id="Bug" name="tipo" value="Bug" required>
            <label for="Bug">Bug report</label>
            <input type="radio" id="Suggestion" name="tipo" value="Suggestion" required>
            <label for="Suggestion">Suggestion</label><br><br>
            <label for="descripcion"><b>What happened?</b></label><br>
            <textarea name="descripcion" id="descripcion" placeholder="Tell us more about this" required></textarea>
            <br><br>
            <input type="submit" class="boton" id="submit" name="submit">
            
            
            <!--
                <label for="subject">Subject: </label><br>
            <input type="text" id="subject" name="subject" placeholder="What happened?"><br>
            <label for="descripcion">
            </label><br>
            <textarea name="descripcion" id="descripcion" cols="60" rows="15" placeholder="Tell us more about this" required></textarea>
            <br><br>
            <input type="submit" class="boton" id="submit">
            -->
            
        </form>
    </div>
    <div id="footer">
        <p id="footer__text">
            Confirmation prompt is still WIP. <br>
            Please be carefull while executing commands
        </p>
    </div><!--footer-->
    <?php
        include("registrar.php");
    ?>
</body>
</html>