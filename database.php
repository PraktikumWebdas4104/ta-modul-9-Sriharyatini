<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "tasembilan";
	function __construct(){
		$this->conn = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
		
		
	}

	function tampil_data(){
		$data = mysqli_query($this->conn,"SELECT * FROM datasembilan");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia,$film_favorite,$travel){
		$ff=implode("," ,$film_favorite);
		$wt=implode(",", $travel);
		mysqli_query($this->conn,"INSERT INTO datasembilan VALUES ('','$nama','$alamat','$usia',film_favorite='$film_favorite',travel='$travel')");
	}

	function hapus($id){
		mysqli_query($this->conn,"DELETE FROM datasembilan WHERE id='$id'");
	}

	function edit($id){
		$data = mysqli_query($this->conn,"SELECT * FROM datasembilan WHERE id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia,$film_favorite,$travel){
		$ff=implode(",", $film_favorite);
		$wt=implode(",", $travel);
		mysqli_query($this->conn,"UPDATE datasembilan SET nama='$nama',alamat='$alamat',usia='$usia', film_favorite='$film_favorite',travel='$travel' WHERE id='$id'");
	}

} 

?>