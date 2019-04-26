<?php

include '../includes/header.php';

?>
    <div class="search-header">
    <h1>Sökresultat</h1>
    </div>

<div class="article-container">
    <?php

        if (isset($_POST['submit-search'])){
            $search = mysqli_real_escape_string($conn, $_POST['submit-search']);
            $sql = "SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%' 
            OR a_author LIKE '%$search%' OR a_date LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);

            if($queryResult > 1) {
                echo $queryResult . " sökträffar";
            }else{
                echo $queryResult. " sökträff";
            }


            if($queryResult > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<a href='article.php?title=".$row['a_title']."&date=".$row['a_date']."'>
                <div class='article-box'>
                <h3>".$row['a_title']."</h3>
                <div class='article-text'>
                <p>".$row['a_text']."</p>
                </div>
                <p>".$row['a_date']."</p>
                <p>".$row['a_author']."</p>
                </div>
                </a>";
                }
            }
            else{
                echo " Finns inget med det sökordet";
            }
        }
    ?>

</div>

<?php
include '../includes/footer.php';
?>