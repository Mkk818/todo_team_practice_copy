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
        $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . ' ORDER BY created DESC');

      
    }

    // idを指定してデータを1件取得するメソッド
    public function findById()
    {
        // 実行するSQL
        $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . ' WHERE id = ?');


    }


    public function delete()
    {
        // 実行するSQL
        $stmt = $this->db_manager->dbh->prepare('DELETE FROM ' . $this->table . ' WHERE id = ?');

        
    }
}
