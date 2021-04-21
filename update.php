<?php
require_once('Models/Task.php');

$title = $_POST['title'];
$contents = $POST['contents'];
$id = $POST['id'];

$task = new Task();
$task->update($title, $contents, $id);

header('location:index.php');
exit;
