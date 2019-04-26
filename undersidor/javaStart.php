<?php
/**
 * Created by PhpStorm.
 * User: 87sofrid
 * Date: 2018-11-21
 * Time: 10:23
 */
?>

<?php
include '../includes/header.php';
?>


<main>
    <div class="wrap">
        <div class="slider">
            <div class="headerBild">
                <div class="slide-content">
                </div>
            </div>
        </div>
    </div>
    <section class="javaInfo">
        <?php
        /** Inkluderar JavaInfo delen på sidan. /Sofia */
        include '../includes/javainfo.php';
        ?>

    <section class="contentJava">
        <div class="ansokanKontaktJava">
            <h3>Ansökan</h3>
            <div class="btnJava">
            <button class="applybutton" id="edu-java" type="button" onclick="addJava()" name="java" value="1">Ansök</button>
            </div>
            <p>
                Ansökan för start HT2018 är stängd.
            </p>
        </div>
    </section>
    </section>
</main>

<?php
include "../includes/footer.php"
?>
<script