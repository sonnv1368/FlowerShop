<?php   
  //session_start();

class MY_Controller extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('defaultmodel');
        $_result = $this->defaultmodel->getAll('danhmuc');
        $data = array(
            'session_state' =>  $this->session->userdata('login_state'),
            'session_name'  =>  $this->session->userdata('is_logged_in'),
            '_sidebar_data' =>  $_result->result()  
        );
      //  $this->load->view('includes/default_template');
        $this->load->library('template');
        
        $this->template->set_template('default');
        
       // $this->template->add_doctype(); 
        
        $this->template->parse_view('_top','includes/default/header',$data);
        $this->template->parse_view('_bottom','includes/default/footer',$data);
        $this->template->parse_view('_sidebar','includes/default/sidebar',$data);
    }
  
}