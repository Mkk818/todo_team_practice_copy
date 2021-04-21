<?php
require_once('Models/Task.php');
require_once('function.php');

$id = $GET['id'];
$task = new Task();
$task = $task->findById($id);


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>編集 | Todoアプリ</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
   
   
</body>
</html>