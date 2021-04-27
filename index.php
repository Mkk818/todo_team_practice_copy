<?php
// Task自体に仕事をさせる
// require_once('dbconnect.php');はTask.phpあれば不要
require_once('Models/Task.php');

$task = new Task;
$tasks = $task->getAll();
// task.phpはmodelクラスを継承したもの
require_once('function.php');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="main">
        <div class="menu">
            <div class="menu-bar">
                <nav>
                    <a href="index.php" class="navbar-top">Todo_team_practice</a>
                    <ul class="nav nav-menu">
                        <li class="nav-item">
                            <a class="nav-link text-right">
                                <!-- ログインしていればURL表示 -->
                            </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-light" href="create.php">Create</a>
                        </li>
                    </ul>
                </nav>
            </div><!-- menu-bar -->
        </div><!-- menu -->
        <div class="menu2">
            <?php foreach ($tasks as $task) : ?>
            <div class="col">            
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <!-- タイトルを表示させる -->
                            <?php echo h($task["title"]); ?>
                        </h5>
                        <p class="card-text">
                            <!-- コンテンツを表示させる -->
                            <?php echo h($task["contents"]); ?>
                        </p>
                        <div class="text-right">
                            <!-- updateの時にidを送る -->
                            <a href="edit.php?id=<?php echo h($task['id']); ?>" class="btn text-success">EDIT</a>
                            <form action="delete.php" method="POST">
                                <!-- deleteの時にidを送る -->
                                <input type="hidden" name="id" value="<?php echo h($task['id']); ?>">
                                <button type="submit" class="btn text-danger">DELETE</button>
                            </form>
                        </div><!-- text-right -->
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col -->
            <?php endforeach; ?>
        </div><!-- menu2 -->
    </div><!-- main -->
</body>

</html>