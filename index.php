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
                <?php foreach ($tasks as $task) : ?>
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
                        <!-- タイトルを表示させる -->
                         <?php echo h($task["title"]); ?>
                    </h5>
                    <p class="card-text">
                        <!-- コンテンツを表示させる -->
                        <?php echo h($task["contents"]); ?>
                    </p>
                    <div class="text-right">
                        <a href="edit.php?id=<?php echo h($task['id']); ?>" class="btn text-success">EDIT</a>
                        <form action="delete.php" method="POST">
                            <!-- deleteの時にidを送る -->
                                <input type="hidden" name="id" value="<?php echo h($task['id']); ?>">
                                <button type="submit" class="btn text-danger">DELETE</button>
                        </form>
                    </div><!-- text-right -->
                </div><!-- card -->
            </div><!-- col -->
        </div><!-- menu -->
        <?php endforeach; ?>
    </div><!-- main -->
</body>

</html>