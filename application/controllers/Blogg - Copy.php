<?php
class Blog extends CI_Controller {
	public function index(){
	
		echo "assalamualaikum, Belajar Controller Codeigniter";
	}
		public function komentar ($nama='',$komentar=''){
		echo 'nama:'.$nama.'<br>';
		echo 'komentar : '.$komentar.'<br>';
	}
	
	public function penjumlahan ($a='',$b=''){
		echo 'nilai a :'.$a.'<br>';
		echo 'nilai b : '.$b.'<br>';
		$hasil = $a+$b;
		echo 'Hasil penjumlahan nilai : '.$a.'+'.$b.'='.$hasil.'<br>';
	}
}

