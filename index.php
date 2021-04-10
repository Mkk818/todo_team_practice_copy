<?php
// Task自体に仕事をさせる
// require_once('dbconnect.php');はTask.phpあれば不要
require_once('Models/Task.php');

$task = new Task;
$tasks = $task->getAll();
// 検証(デバッグ)
// echo '<pre>';
// var_dump($tasks);
// die;
// echo '</pre>';
// task.phpはmodelクラスを継承したもの
require_once('function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todoアプリ</title>
    <!-- <style>
        ul {
            list-style-type: none;
        }
    </style> -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="main">
        <div class="menu">
            <div class="menu-bar">
                <nav class="navbar navbar-col bg-col">
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
                        <li class="nav-item">
                           <a class="nav-link text-light" href="signupForm.php">Sign up</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-light" href="signinForm.php">Sign in</a></li>
                        <li class="nav-item">
                           <a class="nav-link text-light" href="signout.php">Sign out</a></li>
                        <li class="nav-item">
                            <form class="form-inline" method="GET">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="title">
                                <button type="submit">Search</button>
                            </form>
                        </li>
                    </ul>
                </nav><!-- navbar navbar-col bg-col -->
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