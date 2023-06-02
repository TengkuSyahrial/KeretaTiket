<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {
    public function keHalamanDepan(){
      $data ['judul']= 'Halaman Depan';

      $this->load->view('guest/template/header',$data);
      $this->load->view('guest/halaman_depan');
      $this->load->view('guest/template/footer',$data);
      
    }
    public function keHalamanKonfirmasi(){
      $data ['judul']= 'Halaman Konfirmasi';

      $this->load->view('guest/template/header',$data);
      $this->load->view('guest/template/footer',$data);
      $this->load->view('guest/halaman_konfirmasi');
     }
   

}
