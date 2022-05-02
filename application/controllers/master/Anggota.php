<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

    public function index()
    {
        $data['contents'] = 'master/v_anggota';
        $this->load->view('templates/index.php',$data);
    }
}
