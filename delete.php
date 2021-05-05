<?php
// 1 ファイルの読み込み
require_once('Models/Task.php');

// 2 データの受取
$id = $_POST['id'];

// 3 DBからデータの削除 deleteメソッドはmodel.phpに記載済み
$task = new Task();
$task->delete($id);

// 4 リダイレクト
header('location: index.php');
exit;