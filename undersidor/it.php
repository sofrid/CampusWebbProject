<?php
/**
 * Created by PhpStorm.
 * User: 87sofrid
 * Date: 2018-11-21
 * Time: 10:53
 */
?>


<body>

<?php
include '../includes/header.php';
?>


<main>
    <div class="wrap">
        <div class="slider">
            <div class="headerIt">
                <div class="slide-content">
                </div>
            </div>
        </div>
    </div>
    <section class="itInfo">
        <?php
        /** Inkluderar itInfo delen på sidan. /Sofia */
        include '../includes/itinfo.php';
        ?>

    <section class="contentit">
        <div class="ansokanKontaktIt">
            <h3>Ansökan</h3>
            <p>
                Ansök till IT-projektledare med start januari 2019. Ansökan stänger 26 november 2018. Kontakta oss för
                mer information.

                Alla ansökningar som inkommer behandlas löpande. Är du nyfiken eller inte hör något från oss så hör av
                dig till oss!
            </p>
            <div class="btnJava">
            <button class="applybutton" id="edu" type="button" onclick="addIT()" name="IT" value="1">Ansök</button>
            </div>
        </div>
    </section>
    </section>
</main>

<?php
include "../includes/footer.php"
?>