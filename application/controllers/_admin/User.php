<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function logout(){

    }

    public function login(){
        $data = array();
        if($this->input->post()){

        }
        $data['temp'] = 'back-end/user/login';
        $data['title'] = 'Đăng nhập';
        $data['plugin'] = array(
            'js'=>array('plugins/metisMenu/jquery.metisMenu.js','plugins/slimscroll/jquery.slimscroll.min.js','plugins/jeditable/jquery.jeditable.js','plugins/dataTables/datatables.min.js','inspinia.js', 'plugins/pace/pace.min.js'),
            'css'=>array('plugins/dataTables/datatables.min.css')
        );
        $this->load->view('back-end/user/login',$data);
    }
}
