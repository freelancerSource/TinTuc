<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index(){
        $data = array();
        $data['temp'] = 'back-end/home/index';
        $data['title'] = 'Home';
        $this->load->view('back-end/layouts/app',  $data);
    }

    public function logout(){

    }

    public function login(){
        $data = array();
        if($this->input->post()){
            $user       = $this->input->post('email');
            $password   = $this->input->post('password');
            $remember   = $this->input->post('remember');
            if(empty($user) || empty($password)){
                return 'User, password ko được trống';
            }
            $user = $this->UserModel->getUser($user, $password);
            if(!empty($user)){
                $this->session->set_userdata(
                    array(
                        'username'  => $user->username,
                        'email'     => $user->email,
                        'role'      => $user->role
                    )
                );
            }
            redirect('admin/home');
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
