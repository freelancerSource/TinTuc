<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index(){
        $data = array();
        $data['temp'] = 'back-end/news/index';
        $data['title'] = 'news';
        $data['plugin'] = array(
            'js'=>array(
                'plugins/datatables/jquery.dataTables.min.js',
                'plugins/datatables/dataTables.bootstrap.min.js',
                'plugins/slimScroll/jquery.slimscroll.min.js',
            ),
            'css'=>array(
                'plugins/datatables/dataTables.bootstrap.css',
            )
        );

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
            'js'=>array(
                'public/plugins/datatables/jquery.dataTables.min.js',
                'public/plugins/datatables/dataTables.bootstrap.min.js',
                'plugins/plugins/slimScroll/jquery.slimscroll.min.js',
                'public/plugins/fastclick/fastclick.js',
            ),
            'css'=>array('public/css/skins/_all-skins.min.css')
        );
        $this->load->view('back-end/user/login',$data);
    }
}
