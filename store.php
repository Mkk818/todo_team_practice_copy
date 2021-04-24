<?php
// ファイルの読み込み
require_once('Models/Task.php');

// データの受け取り(スーパーグローバル変数)
$title=$_POST['title'];
$contents=$_POST['contents'];

// Taskクラスの呼び出し、実行
$task = new Task();
$task -> create([$title,$contents]);

// リダイレクト
header('location:index.php');
exit;