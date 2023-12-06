<?php
try {
$conn = new PDO("mysql:host=localhost;dbname=BTTH02_1", "root", "");
$sql = "SELECT * FROM comment";
$stmt = $conn->prepare($sql);
$stmt->execute();
}
        catch(PDOException $e){
            echo $e->getMessage();
        }
?>
