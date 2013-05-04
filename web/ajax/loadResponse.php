<?php
include("../../includes/loader.php");

$SQL = "SELECT response_id, response_days, response_html, response_subject, response_from FROM response_emails WHERE response_id = " . $_GET['response_id'] . " AND responder_id = " . $_GET['responder_id'];
$retVal = $app->db->queryrow($SQL);

echo json_encode($retVal);

?>