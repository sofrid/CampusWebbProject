<?php
include "dbh.inc.php";
session_start();

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
    <link href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/regform.css">
    <link rel="stylesheet" href="/css/reg.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">

    <!--Icon till sidan -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Mölndal</title>
</head>

<header>
    <div class="headersticky">
        <div class="header">
            <div class="headerlogo"></div>
            <div class="desktopbuttons">
                <ul>
                    <li id="menuutb">Utbildningar</li>
                    <li id="menustu">Studenttjänster</li>
                    <li id="menuvag">Vägledning</li>
                    <li id="menukon">Kontakt</li>
                </ul>
            </div>
            <div class="icons">
                <ion-icon class="menu" id="menu" name="menu"></ion-icon>
                <ion-icon class="headericon" id="searchicon" name="search"></ion-icon>
               <!-- <ion-icon class="headericon" id="usericon" name="person"></ion-icon> -->
                <?php
                if (!isset($_SESSION['loggedin'])){
                    echo '<ion-icon class="headericon" id="usericon" name="person"></ion-icon>';
                }

                if (isset($_SESSION['loggedin'])){
                    echo "<ion-icon class='headericon' id='usericonactive' name='person'></ion-icon>";
                }
                ?>
                <a href="../undersidor/apply.php"><ion-icon class="headericon2" id="schoolicon" name="school"></ion-icon></a>
                <a href="/index.php"><ion-icon class="headericon" id="homeicon" name="home"></ion-icon></a>
            </div>
            <div class="login">
                <form action="../includes/login.inc.php" method="post" autocomplete="off" >
                    <!--<input type="hidden" name="isnew" id="isnew" value="1">-->
                    <input class="field" type="text" name="mailuid" placeholder="Användarnamn / E-mail...">
                    <p><input class="field"  type="password" name="pwd" placeholder="Lösenord..."></p>
                    <span>

                    <div class="buttonshelper">
                        <input type="submit" name="login-submit" value="Logga in" class="loginbutton">
                        <a href="/undersidor/signup.php"><input type="button" value="Registrera" class="registerbutton"></a>
                    </span>
            </div>
                </form>

            </div>

            <div class="desktoputbildningar">
                <a href="../undersidor/javaStart.php"><p>Java- och webbutvecklare</p></a>
                <a><p>IT- och virtualiseringsspecialist</p></a>
                <a href="../undersidor/it.php"><p>IT-projektledare</p></a>
                <a><p>Aktiveringspedagog inom LSS</p></a>
                <a><p>Specialiserad studiehandledare</p></a>
                <a><p>Information</p></a>
            </div>

            <div class="desktopstudent">
                <a href="#"><p>Intyg, betyg och slutbetyg</p></a>
                <a><p>Prövning och validering</p></a>
                <a><p>Studiemedel</p></a>

            </div>

            <div class="desktopvagledning">
                <a href="../undersidor/vagledningen.php"><p>För dig som är över 20 år</p></a>
                <a><p>För dig som är under 20 år</p></a>
                <a><p>För dig med särskilda behov</p></a>
            </div>
            <div class="desktopkontakt">
                <a href="#"><p>Ledning</p></a>
                <a><p>Studie- och yrkesvägledning</p></a>
                <a><p>Administration</p></a>
                <a><p>Hitta hit</p></a>
            </div>

            <div class="searchfield">
                <form class="searchform" action="../undersidor/search.php" method="post">
                    <input type="text" name="submit-search" placeholder="Sök..." autocomplete="off">
                    <div class="buttonshelper">
                    <button type="submit" name="submit-search" class="loginbutton">Sök</button>
                </form>
                </div>

            </div>

        <div class="logout">
            <p class="logouttext"><ion-icon name="person" class="logouticon" id="logoutusericon"></ion-icon>Inloggad som: <?php if(isset($_SESSION['loggedin'])){echo $_SESSION['userUid'];}?> </p>
            <p class="logouttext"><ion-icon name="book" class="logouticon" id="itslearningicon"></ion-icon>Itslearning</p>
            <p class="logouttext"><ion-icon class="logouticon" id="mailicon" name="mail"></ion-icon>Studentmail</p>
            <p class="logouttext"><ion-icon name="clipboard" class="logouticon" id="schemaicon"></ion-icon>Schema</p>
            <a href='../includes/logout.inc.php'><input type='button' value='Logga ut' class='registerbutton' id='logoutbutton'></a>
        </div>
        </div>

            <div class="header-nav">
                <hr>

                <p id="utbildningar-click">Utbildningar</p>

                <div id="utbildningar-dropdown">
                    <a href="../undersidor/javaStart.php"><p>Java- och webbutvecklare</p></a>
                    <p>IT- och virtualiseringsspecialist</p>
                    <a href="../undersidor/it.php"><p>IT-projektledare</p></a>
                    <p>Aktiveringspedagog inom LSS</p>
                    <p>Specialiserad studiehandledare</p>
                    <p>Information</p>

                </div>
                <p id="studenttjänster-click">Studenttjänster</p>

                <div id="studenttjänster-dropdown">
                    <p>Lärplattform Itslearning</p>
                    <p>Studentmail</p>
                    <p>Schema</p>
                    <a href="#"><p>Intyg, betyg och slutbetyg</p></a>
                    <p>Prövning och validering</p>
                    <p>Studiemedel</p>
                </div>

                <p id="vägledning-click">Studie- och yrkesvägledning</p>
                <div id="vägledning-dropdown">
                    <a href="../undersidor/vagledningen.php"><p>För dig som är över 20 år</p></a>
                     <p>För dig som är under 20 år</p>
                    <p>För dig med särskilda behov</p>
                </div>

             <p id="kontakt-click">Kontakta oss</p>
                <div id="kontakt-dropdown">
                    <a href="#"><p>Ledning</p></a>
                    <p>Studie- och yrkesvägledning</p>
                    <p>Administration</p>
                    <p>Hitta hit</p>
                </div>

                <hr>
            </div>
        </div>
    </div>

</header>




