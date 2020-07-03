<?php
class Blog extends CI_Controller {
	public function index(){
	
		echo "assalamualaikum, Belajar Controller Codeigniter";
	}
		
		public function artikel(){
			$this->load->view('artikel');
		}
}

