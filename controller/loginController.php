<?php 

require_once($_SERVER['DOCUMENT_ROOT']."/Ids-Ips/model/Koneksi.php");

class loginController extends Koneksi
{
	
	private $conn;
	private $TBuser  = "user";
	private $TBadmin = "admin";
	protected $username;
	protected $password;

	public function __construct()
	{
		$this->conn = Koneksi::connect();
	}

	public function login($username, $password)
	{
		$this->username = $this->conn->real_escape_string($username);
		$this->password = $this->conn->real_escape_string($password);

		$query = mysqli_query($this->conn, "SELECT username, password, nim FROM $this->TBuser WHERE username = '$this->username' LIMIT 1");
		if (mysqli_num_rows($query) > 0) {
			$data = $query->fetch_array();
			if ($data['password'] === $this->password) {
				session_start();
				$_SESSION['nim'] = $data['nim'];
				return exit(header('Location:index.php'));
			}
		}

	}

	public function loginAdmin($username, $password)
	{

		$this->username = $username;
		$this->password = md5($password);

		$query = mysqli_query($this->conn, "SELECT username, password FROM $this->TBadmin WHERE username = '$this->username' && '$this->password' LIMIT 1");

		if (mysqli_num_rows($query) > 0) {
			// $data = $query->fetch_array();
			// echo $data['password'];
			// if ($data['password'] == md5($this->password)) {
			return header('Location:dashboard.php');
			// }else{
			// }
		}else{

			// return header('Location:index.php');
		}

	}

}

?>