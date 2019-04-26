<?php
require "../includes/header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="form-input">
                <img src="../img/campus1.png">
              <h1>Registrera</h1>
                <hr>
                <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyfields") {
                            echo '<p class="signuperror">Fyll i alla fält!</p>';
                        }
                        else if ($_GET['error'] == "invaliduidmail") {
                            echo '<p class="signuperror">Fel användarnamn och e-mail!</p>';
                        }
                        else if ($_GET['error'] == "invaliduid") {
                            echo '<p class="signuperror">Fel användarnamn!</p>';
                        }
                        else if ($_GET['error'] == "invalidmail") {
                            echo '<p class="signuperror">Fel e-mail!</p>';
                        }
                        else if ($_GET['error'] == "passwordcheck") {
                            echo '<p class="signuperror">Ditt lösenord matchar inte!</p>';
                        }
                        else if ($_GET['error'] == "usertaken") {
                            echo '<p class="signuperror">Användarnamn är redan upptaget!</p>';
                        }
                    }
                        if(isset($_GET['signup'])){
                    if ($_GET['signup'] == "success") {
                        echo '<p class="signupsuccess">Registrering Lyckades!</p>';
                    }
                }
                ?>
                <form action="../includes/signup.inc.php" method="post">
                <input type="text" placeholder="Användarnamn:" name="uid" id="reginput">
                <input type="text" placeholder="Email:" name="mail" id="reginput">
                <input type="password" placeholder="Lösenord.." name="pwd" id="reginput">
                <input type="password" placeholder="Repetera Lösenord.." name="pwd-repeat" id="reginput">
                <hr>
                <p><button type="submit" class="regbtn" name="signup-submit">Registrera</button>
                </p>
                </form>
            </section>
        </div>
    </main>
<?php
include '../includes/footer.php';
?>