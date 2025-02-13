<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nirmalbhumi_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    ?>
    <script>
        alert("Database not connected...");
    </script>
    <?php
}
?>