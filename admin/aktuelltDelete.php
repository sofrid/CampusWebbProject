<?php
/**
 * Created by PhpStorm.
 * User: madde
 * Date: 2018-11-26
 * Time: 14:25
 */
 session_start();
include "connectMaddeServer.php";
//Kontrollerar om inlägget kan raderas
if(isset($_GET['deleteid']) && $_GET['deleteid'] > 0 ){
    $isDeleteid = $_GET['deleteid'];
}

// Ska inlägget raderas?
if(isset($_POST['isdeleteid']) && $_POST['isdeleteid'] > 0 ){
    $query ="DELETE FROM aktuellt WHERE aId=". $_POST['isdeleteid'];

    $result = mysqli_query($db, $query);

    header("Location: aktuelltAdmin.php");
}
include "../includes/header.php"
?>

<form class="DeleteAktuellt" action="aktuelltDelete.php" method="post">
    <input type="hidden" name="isdeleteid" value="<?php echo $isDeleteid; ?>">
    <h2>Vill du verkligen radera inlägget?</h2>
    <p><input class="btn" type="submit" value="JA"><a href="aktuelltAdmin.php"><input class="btn1" type="button" value="Tillbaka"></a></p>

</form>
<?php
include "../includes/footer.php"
?>
<script type="text/javascript" src="/java/jquery-3.2.1.min.js"></script>
<script src="/java/js.js" type="text/javascript"></script>
