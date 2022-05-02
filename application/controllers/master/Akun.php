<?php
class Akun extends CI_Controller {

    public function index()
    {
        $data['contents'] = 'master/v_akun';
        $this->load->view('templates/index.php',$data);
    }

    public function get_produk_json(){
        header('Content-Type: application/json');
        echo $this->m_akun->index();
    }
}
