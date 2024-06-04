<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        // Load necessary models or libraries
        $this->load->model('file_model'); // Adjust 'file_model' to your actual model name
    }

    public function index($file_id) {
        // Retrieve file data from the database based on the file ID
        $file = $this->file_model->get_file_by_id($file_id);

        if ($file) {
            // Set headers for file download
            header('Content-Type: ' . $file->mime_type);
            header('Content-Disposition: attachment; filename="' . $file->file_name . '"');
            header('Content-Length: ' . strlen($file->file_content));

            // Output the file content
            echo $file->file_content;
        } else {
            // File not found, handle error (e.g., show 404 page)
            show_404();
        }
    }
}
