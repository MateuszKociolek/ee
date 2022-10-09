<?php
$db = mysqli_connect("localhost", "root", "", "ratownictow");

if(isset($_POST['nr']) && isset($_POST['nrd']) && isset($_POST['adr'])){
    mysqli_querry($db, "insert into zgloszenia (pilne, czas zgloszenia) values (0, ".date('H:i:s').")");
}

mysqli_close($db);
?>