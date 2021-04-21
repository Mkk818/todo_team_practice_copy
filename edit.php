<?php
require_once('Models/Task.php');
require_once('function.php');

$id = $_GET['id'];
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
<div class="header">
        <nav class="headerbar">        
         <a href="index.php">Todoアプリ</a>
        </nav>    
    </div>
    <div class="form">
        <form action="update.php" method="post">

            <div class="title">  
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="<?= $task['title']; ?>">
        
             </div>

            <div class="contents">
                <label for="contents">Contents</label>
                <textarea name="contents" id="contents" rows="10" cols="100"><?= $task['contents'] ?></textarea>
            </div>
            <input type="hidden" name="id" value="<?= h($task['id']); ?>">
            <div class="submit-button">
             <button type="submit">更新</button>
            </div>
       
        </form>
    </div>
   
</body>
</html>