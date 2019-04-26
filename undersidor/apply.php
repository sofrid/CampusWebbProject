
<?php
include '../includes/header.php';
?>
<div class="applybild"></div>

<section class="section-text">
    <h2>Dina ansökningar</h2>
    <p>Här ser du utbildningarna du valt att söka hos oss på Campus Mölndal. Du kan ändra din ansökan fram till sista
    ansökningsdatum.</p>
</section>

<section id="java"></section>
<section id="IT"></section>
<section class="sendsection" id="send"></section>
<section id="noedus"></section>

<script>

    var IT = localStorage.getItem("IT");
    var java = localStorage.getItem("java");

    // BYGGER UPP HTML PÅ ANSÖKNINGSSIDAN
    if (java == 1){

        var edu1 = document.getElementById('java');
        edu1.innerHTML = "<div id='edu1'><p><b>Utbildning: </b><i>Java- och webbutvecklare</i></p>" +
            "<p><b>Omfattning: </b>Heltid, dagtid</p>" +
            "<p><b>Plats: </b>Campus Mölndal</p>" +
            "<div class='removehelper'><button class='remove' id='edu-java' type='button' value='0' onclick='removeJava();location.reload(true);' name='java'>Ta bort</button></div></div>";
    }

    if (IT == 1){

        var edu2 = document.getElementById('IT');
        edu2.innerHTML = "<div id='edu2'><p><b>Utbildning: </b><i>IT-Projektledare</i></p>" +
            "<p><b>Omfattning: </b>Heltid, dagtid</p>" +
            "<p><b>Plats: </b>Campus Mölndal</p>" +
            "<div class='removehelper'><button class='remove' id='edu' type='button' value='0' onclick='removeIT();location.reload(true);' name='IT' >Ta bort</button></div></div>";
    }


    if(IT == 1 || java == 1){
        var send = document.getElementById('send');
        send.innerHTML = "<a href ='thankyou.php'><button class='applybutton' id='sendbutton' type='button' value ='0' onclick='send()'>Skicka</button></a>";

    }

    if(IT == 0 && java == 0){
        var noedus = document.getElementById('noedus');
        noedus.innerHTML = "<p>Du har ännu inte valt att söka någon utbildning hos oss. " +
            "Använd menyn för att hitta någon du är intresserad av!</p>";

    }


</script>

<?php
include '../includes/footer.php';
?>

