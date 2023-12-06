<?php
require_once("db_connect.php");
if(!empty($_POST["name"]) && !empty($_POST["comment"])){
	$insertComments = "INSERT INTO comment (parent_id, comment, sender) VALUES ('".$_POST["commentId"]."', '".$_POST["comment"]."', '".$_POST["name"]."')";
    $stmt = $pdo->prepare($insertComments);
    $stmt->bindParam(':commentId', $commentId);
	$stmt->bindParam(':comment', $comment);
	$stmt->bindParam(':name', $name);
	$stmt->execute();
    if ($stmt->errorCode() !== '00000') {
        $errorInfo = $stmt->errorInfo();
        die("Database error: {$errorInfo[2]}");
    }
	$message = '<label class="text-success">Comment posted Successfully.</label>';
	$status = array(
		'error'  => 0,
		'message' => $message
	);	
} else {
	$message = '<label class="text-danger">Error: Comment not posted.</label>';
	$status = array(
		'error'  => 1,
		'message' => $message
	);	
}
echo json_encode($status);
?>
