<?php
include("../../includes/loader.php");

$SQL = "UPDATE response_emails SET response_subject = '" . addslashes($_POST['response_subject']) . "', response_html='" . addslashes($_POST['response_html']) . "' WHERE response_id = " . $_POST['response_id'] . " AND responder_id = " . $_POST['responder_id'];
$app->db->query($SQL);

echo json_encode(true);

?>