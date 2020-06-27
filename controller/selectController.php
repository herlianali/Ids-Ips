<?php

require_once('../model/Koneksi.php');
require_once('../model/User.php');

use Model\User;

class loginController extends Koneksi
{
    protected $conn;
    protected $table;

    public function __construct()
    {
        $this->conn  = parent::connect();
        $this->table = Model\User::table();
    }

    public function show()
    {
        $ret   = [];
        $query = 'SELECT * FROM `'.$this->table.'`';
        $exec  = $this->conn->query($query);
        while($data = $exec->fetch_array()){
            $res = array(
                'nim' => $data['nim'],
                'nama' => $data['nama'],
                'jurusan' => $data['jurusan'],
                'kelas' => $data['kelas'],
                'semester' => $data['semester'],
                'username' => $data['username'],
                'password' => $data['password']
            );
            $ret[] = $res;
        }
        return json_encode($ret);

    }
}
// loginController::show();
$show = new loginController;
$encode = utf8_encode($show->show());
$json = json_decode($encode,true);
  foreach ($json as $j) {
      echo $j['nim'].'<br>';
  }

?>
