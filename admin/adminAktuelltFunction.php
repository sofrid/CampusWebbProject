<?php
/**
 * Created by PhpStorm.
 * User: madde
 * Date: 2018-11-26
 * Time: 13:43
 */
session_start();
include "connectMaddeServer.php";
?>
<?php
$query1 = "SELECT * FROM aktuellt ORDER BY aId ASC";

$heading = mysqli_query($db,$query1);
//Loopar igenom arrayen som innehåller alla blogg inlägg

while ($row1 = mysqli_fetch_array($heading)) {
    ?>
    <div class="adminAktuellt">
    <h3 id="createH3"><?php echo $row1['aHeadline'];?></h3>
    <p id="aText"><a href="aktuelltUpdate.php?editid=<?php echo $row1['aId'];?>">Uppdatera</a></p  class="aText"><p><a href="aktuelltDelete.php?deleteid=<?php echo $row1['aId'];?>">Ta bort</a></p>
    </div>
    <?php
}
?>
