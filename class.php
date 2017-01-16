<?php
//Membuat Class Buku
class Buku
{
	//property
	private $judulBuku;

	//method
	public function setJudulBuku($judulBuku)
	{
		$this->judulBuku = $judulBuku;

		echo "Buku ini Berjudul " . $this->judulBuku . "<br>";
	}
}

//Membuat Class Matematika
class Matematika
{
	//property
	public $inputAngka1;
	public $inputAngka2;

	//Method
	public function setAngka($angka1, $angka2)
	{
		$this->inputAngka1 = $angka1;
		$this->inputAngka2 = $angka2;
	}

	public function kali()
	{
		return $this->inputAngka1 * $this->inputAngka2;
	}

	//Fungsi Pembagian
	public function bagi()
	{
		return $this->inputAngka1 / $this->inputAngka2;
	}

	//Fungsi Penambahan
	public function tambah()
	{
		return $this->inputAngka1 + $this->inputAngka2;

	}
}


//Membuat Class Masak Nasi
class MasakNasi
{
	//property
	public $beras;
	public $santan;
	public $air;

	//merhod
	public function setBahan($beras, $air)
	{
		$this->beras = $beras;
		$this->air = $air;
	}

	public function masakNasiBiasa()
	{
		echo "Siapkan Beras " . $this->beras . " Cup
			<br> Cuci sampai bersih Berasnya.
			<br> Setelah Bersih, Tambahkan air dengan takaran "
			. $this->air . " Jari <br> Nyalakan Kompor" ;
	}
}

//Membuat Class Laptop
class Laptop
{
	//property
	public $pemilik;
	public $merk;
	public $warna;
	public $ukuran_layar;
	public $processor;

	//Method
	public function hidupkanLaptop()
	{
		return "Kasih Nyala Laptop nya";
	}

	public function matikanLaptop()
	{
		return "Kasih Mati Laptop nya";
	}
}

//Membuat Class Murid
class Murid
{
	//property
	public $nis;
	public $nama;
	public $jenis_kelamin;
	public $agama;
	public $kelas;

	//data murid
	public function dataMurid($nis, $nama, $jenis_kelamin, $agama, $kelas)
	{
		$this->nis = $nis;
		$this->nama = $nama;
		$this->jk = $jenis_kelamin;
		$this->agama = $agama;
		$this->kelas = $kelas;
	}

	public function cekDaftar()
	{
		if (!empty($_SESSION['daftar_sd'])) {
			$daftar_sd = $_SESSION['daftar_sd'];
		} else {
			$_SESSION['daftar_sd'] = array();
		}
	}

	public function daftarSekolah()
	{
		$daftar_sd = [
			'nis'	=>	$this->nis,
			'nama'	=>	$this->nama,
			'jk'	=>	$this->jk,
			'agama'	=>	$this->agama,
			'kelas'	=>	$this->kelas,
		];

		$_SESSION['daftar_sd'][] = $daftar_sd;
	}

}

//Membuat Class Animal
class Animal
{
	//Property
	public $nama;
	public $jenis;
	public $makanan;

	public function __construct($nama, $jenis, $makanan)
	{
		$this->nama = $nama;
		$this->jenis = $jenis;
		$this->makanan = $makanan;
	}
}

//Membuat Class Toko
class Toko
{
	//property
	public	$nama_session;
	public $no_produk;
	public $nama_produk;
	public $kategori;
	public $stok;
	public $harga_beli;
	public $harga_jual;

	public function __construct($nama_session, $no_produk, $nama_produk, $kategori,
		$stok, $harga_beli, $harga_jual)
	{
		$this->nama_session = $nama_session;
		$this->no_produk = $no_produk;
		$this->nama_produk = $nama_produk;
		$this->kategori = $kategori;
		$this->stok = $stok;
		$this->harga_beli = $harga_beli;
		$this->harga_jual = $harga_jual;
	}

	public function tambahProduk($nama_session)
	{
		if (!empty($_SESSION['$nama_session'])) {
			$$nama_session = $_SESSION['$nama_session'];
		} else {
			$_SESSION['$nama_Session'] = array();
		}

		$$nama_session = [
			'nama_toko'		=>	$this->nama_session,
			'no_produk'		=>	$this->no_produk,
			'nama_produk'	=>	$this->nama_produk,
			'kategori'		=>	$this->kategori,
			'stok'			=>	$this->stok,
			'harga_beli'	=>	$this->harga_beli,
			'harga_jual'	=>	$this->harga_jual,
		];

		$_SESSION[$nama_session][] = $$nama_session;
	}
}

class Mobil
{
	public $merk;
	public $jumlah_roda;
	public $tahun_produksi;

	public function setMobil($merk, $jumlah_roda, $tahun_produksi)
	{
		$this->merk = $merk;
		$this->roda = $jumlah_roda;
		$this->tahun = $tahun_produksi;
	}

	public function tampil()
	{
		echo $this->merk . "<br>";
		echo $this->roda . "<br>";
		echo $this->tahun . "<br>";
	}
}

class Truck extends Mobil{}

?>
