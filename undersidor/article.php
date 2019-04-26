<?php

include '../includes/header.php';

?>
    <div class="search-header">
        <h1>Artiklar</h1>
    </div>

    <div class="article-container">
        <?php
        $title = mysqli_real_escape_string($conn, $_GET['title']);
        $date = mysqli_real_escape_string($conn, $_GET['date']);

        $sql = "SELECT * FROM article WHERE a_title='$title' AND a_date='$date'";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if($queryResults > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='article-box'>
                <h3>".$row['a_title']."</h3>
                <div class='article-text'>
                <p>".$row['a_text']."</p>
                </div>
                <p>".$row['a_date']."</p>
                <p>".$row['a_author']."</p>
            </div>";
            }

        }


        ?>

    </div>

<?php
include '../includes/footer.php';
?>