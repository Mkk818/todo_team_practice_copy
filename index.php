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

<body class="index-body">
    <div class="main">
        <header>
            <a href="index.php" class="header-left">Todo</a>
            <div class="nav-item">
                <a class="text-right" href="create.php">Create</a>
            </div>
        </header>
        <div class="menu">
            <div class="col">
                <!-- foreachでコロン構文 -->
                <div class="card">
                    <script type="text/javascript">
                        var imglist = new Array(
                            "./img/Todolist-rafiki.png",
                            "./img/Todolist-amico.png",
                            "./img/Todolist-cuate.png",
                        );
                        var selectnum = Math.floor(Math.random() * imglist.length);
                        var output = "<img src=" + imglist[selectnum] + ">";
                        document.write(output);
                    </script>
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
                </div><!-- card -->
            </div><!-- col -->
        </div><!-- menu -->
        <!-- php終了文書く -->
    </div><!-- main -->
</body>

</html>