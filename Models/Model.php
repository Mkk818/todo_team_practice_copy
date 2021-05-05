<?php

require_once('dbconnect.php');

class Model
{
    // プロパティ
    protected $table;
    protected $db_manager;

    // インスタンス化した時に呼ばれるメソッド
    public function __construct()
    {
        // db_managerプロパティは、
        // DbManagerクラスのインスタンス
        $this->db_manager = new DbManager();
        $this->db_manager->connect();
    }

    // DBからデータを全て取得するメソッド
    public function getAll()
    {
        // 実行するSQL
        $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table);
        // 準備したSQLを実行する
        $stmt->execute();
        // 実行結果を取得
        $tasks = $stmt->fetchAll();
        // 値を返す
        return $tasks;
    }

    // idを指定してデータを1件取得するメソッド
    public function findById($id)
    {

        // 実行するSQL
        $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . ' WHERE id = ?');

        $stmt->execute([$id]);
        $task = $stmt->fetch();
        return $task;
    }


    public function delete($id)
    {
        // 実行するSQL
        $stmt = $this->db_manager->dbh->prepare('DELETE FROM ' . $this->table . ' WHERE id = ?');
        return $stmt->execute([$id]);
    }
}
