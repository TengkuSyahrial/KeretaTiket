<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function keHalamanLogin( ){
        $this->load->view('admin/login');
    }
    public function login(){
        $data = array(
            'username' => $this->input->post('username'),
            'password' => sha1($this->input->post('password'))
        );
        
        $cek = $this->M_Admin->cekLogin($data);

        if ($cek > 0) {
            $sess = array (
                'status' => TRUE,
                'level' => 'admin'
            );

            // SET USERDATA / SESSION
            $this->session->set_userdata($sess);


            redirect(base_url('admin/dashboard'));
            
        }else{
            redirect(base_url('login'));
        }

    }
    public function logout(){
        session_destroy();
        redirect(base_url());
        # code...
    }
 
    public function keHalamanDashboard(){
        if ($this->session->status === TRUE){

            $data['stasiun']= $this->M_Admin->getDataStasiun()->result();
            $this->load->view('admin/dashboard', $data);
        }else{
            redirect(base_url('login'));
        }
    }
}
