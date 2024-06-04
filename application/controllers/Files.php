<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Files management class created by CodexWorld
 */
class Files extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('file');
    }
    
    public function index(){
        $data = array();
        
        //get files from database
        $data['files'] = $this->file->getRows();
        
        //load the view
        $this->load->view('files/index', $data);
    }
    
    public function download($id){
        if(!empty($id)){
            // Load download helper
            $this->load->helper('download');
            
            // Get file info from database
            $fileInfo = $this->file->getRows(array('id' => $id));
            
            // Check if $fileInfo is not empty and contains 'file_name' index
            if ($fileInfo && array_key_exists('file_name', $fileInfo)) {
                // File path
                $file = 'uploads/files/'.$fileInfo['file_name'];
                
                // Download file from directory
                force_download($file, NULL);
            } else {
                // Handle case where file info is not found or incomplete
                echo 'File info not found or incomplete.';
            }
        }
    }
    
    public function validate_email() {
        // Get the posted email and file ID
        $email = $this->input->post('email');
        $fileId = $this->input->post('id'); // Change 'file_id' to 'id'
        
        // Validate email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
            // Check if the file ID is 1
            if ($fileId == 1) {
                // Get file info from database
                $fileInfo = $this->file->getRows(array('id' => $fileId));
                
                if ($fileInfo) {
                    // File path
                    $file = 'uploads/files/' . $fileInfo['file_name'];
                    
                    // Download file from directory
                    $this->load->helper('download');
                    force_download($file, NULL);
                    
                } else {
                    echo 'Invalid file ID.';
                }
            } else {
                echo 'File ID is not 1.';
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Invalid Email!</strong> Please enter a valid email address with the correct format.
            </button>
          </div>
          <script>
            setTimeout(function(){
                $(".alert").alert("close");
            }, 3000);
          </script>');

        redirect('Index');
        }
    }
    
    
}