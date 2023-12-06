<?php 
require("db_connect.php");
if(!empty($_POST["name"]) && !empty($_POST["comment"])){
	$commentId = $_POST["commentId"];
    $comment = $_POST["comment"];
    $name = $_POST["name"];
	try {
	$insertComments = "INSERT INTO comment (parent_id, comment, sender) VALUES ('".$_POST["commentId"]."', '".$_POST["comment"]."', '".$_POST["name"]."')";
	$stmt = $conn->prepare($insertComments);
	$stmt->bindParam(':commentId', $commentId);
	$stmt->bindParam(':comment', $comment);
	$stmt->bindParam(':name', $name);
	$stmt->execute();
	$message = '<label class="text-success">Comment posted Successfully.</label>';
	$status = array(
		'error'  => 0,
		'message' => $message
	);	
} catch (PDOException $e) {
	$message = '<label class="text-danger">Error: ' . $e->getMessage() . '</label>';
	$status = array(
		'error'  => 1,
		'message' => $message
	);
}

} else {
	$message = '<label class="text-danger">Error: Comment not posted.</label>';
	$status = array(
		'error'  => 1,
		'message' => $message
	);	
}
echo json_encode($status);
?>

