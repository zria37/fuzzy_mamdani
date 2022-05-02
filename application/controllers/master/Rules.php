<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rules extends CI_Controller {

    public function index()
    {
        $data['contents'] = 'master/v_lingkungan';
        $this->load->view('templates/index.php',$data);
    }
}
