<?php
try {
$conn = new PDO("mysql:host=localhost;dbname=BTTH02_1", "root", "");
}
        catch(PDOException $e){
            echo $e->getMessage();
        }
?>
