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
            <div class="col">
                <!-- foreachでコロン構文 -->
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                        <!-- ここにタイトル -->
                        </h5>
                        <p class="card-text">
                            <!-- ここにテキスト -->
                        </p>
                        <div class="text-right">
                            <!-- href内を変更 -->
                            <a href="edit.php" class="btn text-success">EDIT</a>
                            <form action="delete.php" method="POST">
                                <!-- *valueの中にtaskのidが入るようにする -->
                                <input type="hidden" name="id" value="">
                                <button type="submit" class="btn text-danger">DELETE</button>
                            </form>
                        </div><!-- text-right -->
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col -->
            <!-- php終了文書く -->
        </div><!-- menu2 -->
    </div><!-- main -->
</body>

</html>