<?php
include_once("db_connect.php");
$commentQuery = "SELECT id, parent_id, comment, sender, date FROM comment WHERE parent_id = '0' ORDER BY id DESC";
$commentsResult = $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($stmt->errorCode() !== '00000') {
    $errorInfo = $stmt->errorInfo();
    die("Database error: {$errorInfo[2]}");
}
$commentHTML = '';
while ($comment = $stmt->fetch(PDO::FETCH_ASSOC)) {
	$commentHTML .= '
		<div class="panel panel-primary">
		<div class="panel-heading">By <b>'.$comment["sender"].'</b> on <i>'.$comment["date"].'</i></div>
		<div class="panel-body">'.$comment["comment"].'</div>
		<div class="panel-footer" align="right"><button type="button" class="btn btn-primary reply" id="'.$comment["id"].'">Reply</button></div>
		</div> ';
	$commentHTML .= getCommentReply($conn, $comment["id"]);
}
echo $commentHTML;
?>
