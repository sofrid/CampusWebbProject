<?php
/**
 * Created by PhpStorm.
 * User: madde
 * Date: 2018-11-21
 * Time: 11:08
 */
session_start();
include "../admin/connectMaddeServer.php";

//$query = "SELECT * FROM aktuellt ORDER BY aId ASC";

//$result = mysqli_query($db,$query);
$query1 = "SELECT * FROM aktuellt WHERE aId = 10";
$query2 = "SELECT * FROM aktuellt WHERE aId = 11";
$query3 = "SELECT * FROM aktuellt WHERE aId = 12";


$post1 = mysqli_query($db,$query1);
$post2 = mysqli_query($db,$query2);
$post3 = mysqli_query($db,$query3);



 ?>

<?php
include "../includes/header.php"
?> <div class="aktuelltbild"></div>
            <div class="akutelltWrap">
                <h2 id="headingAktuellt">Aktuellt</h2>
           <div class="aktuelltText">
<?php
                //Loopar igenom arrayen som innehåller alla blogg inlägg
$row1 = mysqli_fetch_array($post1);
$row2 = mysqli_fetch_array($post2);
$row3 = mysqli_fetch_array($post3);
?>
                <div id="November 2018" class="tabcontent">
                    <h3><?php echo $row1[1]; ?></h3>
                    <img class="aktuelltImg" src="../img/aktuellt1.jpg" width="500px" height="350px">
                    <p><?php echo $row1[2] ?></p>
                    <p id="text1" class="text"><?php echo $row1[3] ?></p>
                    <p><?php echo $row1[4] ?></p>
                    <button id="btn1" class="btn">Läs mer</button>
                </div>

                <div id="Oktober 2018" class="tabcontent">

                    <h3><?php echo $row2[1]; ?></h3>
                    <img class="aktuelltImg" src="../img/aktuellt2.jpg" width="500px" height="350px">
                    <p><?php echo $row2[2] ?></p>
                    <p id="text2" class="text"><?php echo $row2[3] ?></p>
                    <p><?php echo $row2[4] ?></p>
                    <button id="btn2" class="btn">Läs mer</button>
                </div>

                <div id="September 2018" class="tabcontent">
                    <h3><?php echo $row3[1]; ?></h3>
                    <img class="aktuelltImg" src="../img/aktuellt3.jpg" width="500px" height="350px">
                    <p><?php echo $row3[2] ?></p>
                    <p id="text3" class="text"><?php echo $row3[3] ?></p>
                    <p><?php echo $row3[4] ?></p>
                    <button id="btn3" class="btn">Läs mer</button>
                </div>

           </div>
                <div class="aktuelltSideMenu">
                    <div class="tab">
                        <h3 id="nyhetsArkiv">NyhetsArkiv</h3>
                        <button class="tablinks" onclick="openCity(event, 'November 2018')">November 2018</button>
                        <button class="tablinks" onclick="openCity(event, 'Oktober 2018')">Oktober 2018</button>
                        <button class="tablinks" onclick="openCity(event, 'September 2018')">September 2018</button>
                    </div>
                </div>
            </div>
                <?php
                include "../includes/footer.php"
                ?>

<script src="../java/aktuellt.js"></script>




