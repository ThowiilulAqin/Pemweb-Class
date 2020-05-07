<?php 

	// class parents
	class Usaha {
		public $nama_usaha,
			   $alamat;


		public function __construct( $nama_usaha, $alamat, $jenis_kuliner = "", $jenis_elektronik = "" ) {
			$this->nama_usaha = $nama_usaha;
			$this->alamat = $alamat;
			$this->jenis_kuliner = $jenis_kuliner;
			$this->jenis_elektronik = $jenis_elektronik;
		}

		public function __toString() {
			return $this->nama_usaha . " , " . $this->alamat;
		}


	}

	// child class
	class Kuliner extends Usaha {
		public $jenis_kuliner;
		public function getKuliner() {
			$str = "{$this->nama_usaha}  ,  {$this->alamat} || {$this->jenis_kuliner}";
			return $str;

		}
	}

	// child class 
	class Elektronik extends Usaha {
		public $jenis_elektronik;
		public function getElektronik() {
			$str = "{$this->nama_usaha} , {$this->alamat} || {$this->jenis_elektronik}";
			return $str;

		}
	} 

	// isinya informasi tentang usaha, dan kateogori usaha
	$usaha1 = new Usaha("Coklat Spesial", "Jambangan, Surabaya");
	$usaha2 = new Kuliner("S-KATA", "Ketintang", "Coffe Shop", "");
	$usaha3 = new Elektronik("Alta Tech", "Surabaya Utara", "", "Toko Laptop");

	echo "Usaha 1 : " . $usaha1;
	echo "<br>";
	echo "Kategori Kuliner : " . $usaha2->getKuliner();
	echo "<br>";
	echo "Kategori Elektronik : " . $usaha3->getElektronik();
	

?>