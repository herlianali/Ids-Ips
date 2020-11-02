<?php

include "koneksi.php";

class Crud extends Koneksi {

    protected $conn;
    protected $tabel;

    public function __construct() {
        $this->conn = parent::connect();
        $this->tabel = parent::user();
    }

    public function showAll() {
        $ret = [];
        $query = "SELECT * FROM `.$this->table.`";
        $exec = $this->conn->query($query);
        while ($data = $exec->fetch_array()){
            $resp = array(
                'nim' => $data['nim'],
                'nama' => $data['nama'],
                'jurusan' => $data['jurusan'],
                'kelas' => $data['kelas'],
                'semester' => $data['semester'],
                'username' => $data['username'],
                'password' => $data['password']
            );
            $ret[] = $resp;
        }
        return json_encode($ret);
    }
}


?>
