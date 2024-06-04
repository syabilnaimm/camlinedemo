<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = 'Camline';
        $this->load->view('templates/page_header', $data);
        $this->load->view('users/index', $data);
        $this->load->view('templates/page_footer');
    }
}
