<?php
/**
 * Created by PhpStorm.
 * User: madde
 * Date: 2018-11-17
 * Time: 09:05
 */
session_start();
include "connectMaddeServer.php";


//Lägg till nytt blogg inlägg
if(isset($_POST['new']) && $_POST['new'] == 1){
    $date = date("Y-m-d");
    $headline = mysqli_real_escape_string($db, $_POST['headline']);
    $summation = mysqli_real_escape_string($db, $_POST['summation']);
    $post = mysqli_real_escape_string($db, $_POST['post']);

    $query = "INSERT INTO aktuellt
                (aHeadline,aSummation,aPost,aDate)
                VALUES ('$headline','$summation','$post','$date')";


    $result = mysqli_query($db,$query);
    $insId = mysqli_insert_id($db);
    if ($insert == $result) {
        // Success!

    }

    header("Location: ../aktuelltPosts.php" );
}
?>

<?php
include "../includes/header.php"
?>
<section class="aWarp">
<section class="CreateAktuellt">

        <h2>Skapa inlägg</h2>
        <form class="createPost" action="aktuelltAdmin.php" method="post">
            <input type ="hidden" name="new" id="new" value="1">
            <input id="headline" type = "text" name="headline" placeholder="Headline"  >
            <textarea name ="summation" maxlength = "1200"  rows="20" cols="50" placeholder="Skriv summering här:"></textarea>
            <textarea name ="post" maxlength = "10000"  rows="50" cols="75" placeholder="Skriv hela texten här: "></textarea>
            <input class="btn" type="submit" value="Skicka">

        </form>

</section>
<section class="adminAktuellt">
        <?php
        include "adminAktuelltFunction.php"
        ?>

</section>
</section>

    <script type="text/javascript" src="../java/jquery-3.2.1.min.js"></script>
    <script src="../java/js.js" type="text/javascript"></script>
<?php
include "../includes/footer.php"
?>