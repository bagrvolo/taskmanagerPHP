<?php

require_once 'database/QueryBuilder.php';
$db = new QueryBuilder();

$db->addTask($_POST);

header("Location: /");
exit;

?>