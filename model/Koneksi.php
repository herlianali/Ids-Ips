<?php

// namespace Model;

class Koneksi
{
    protected $tables;

    private $hostname = 'localhost';
    private $username = 'herlian';
    private $password = 'aliyasa';
    private $database = 'skripsi';
    private $conn;

    public function connect()
    {
        return new mysqli($this->hostname, $this->username, $this->password, $this->database);

    }

    public function table_list()
    {
        return $this->tables;
    }

}
    // $koneksi = new Koneksi;
    // print_r($koneksi->table_list());

?>
