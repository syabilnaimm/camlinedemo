<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('file'); // Load the File model
    }

    public function index()
    {
        $data['title'] = 'Camline';
        
        // Fetch files data
        $data['files'] = $this->file->getRows();
        
        // Load views
        $this->load->view('templates/page_header', $data);
        $this->load->view('users/index', $data);
        $this->load->view('templates/page_footer');
    }
}
