<?php

class Koneksi {

    private $host = "localhost";
    private $name = "herlian";
    private $pass = "aliyasa";
    private $db   = "skripsi";
    private $conn;
    protected $tables;

    public function connect() {
        // $this->conn = null;
        // try {
        //     $this->conn = new PDO("mysql:host".$this->host.";dbname=".$this->db, $this->name, $this->pass);
        //     // $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // } catch (PDOException $e) {
        //     echo "Connection failed: ".$e->getMessage();
        // }
        // return $this->conn;
        return new mysqli($this->host,$this->name,$this->pass,$this->db);
    }

    public function user() {
        return $this->tables = "user";
    }

    public function lab() {
        return $this->tables = "lab";
    }

}
// //
// $koneksi = new Koneksi;
// var_dump($koneksi->user());
// var_dump($koneksi->lab());
?>
