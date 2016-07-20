<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');
    
    
define('MAX_UPLOAD_SIZE',524288);
define('SITE_URL',base_url());
/*define('UPLOAD_FILE_TYPE',array('jpg','jpeg','bmp','png','mp4','mp3','flv','swf','txt','doc','gif'));*/

class CI_Defaultlib{
    
    var $CI;
    
    function __construct(){
        $this->CI =& get_instance();
    }
    
    function upload_multiFles($input_name, $_directory){
        
        $_uploadPath = dirname($_SERVER["SCRIPT_FILENAME"]).'/public/uploads/'.$_directory.'/';
        $max_filesize = 524288; 
        $_file_type  = array('jpg','jpeg','bmp','png','mp4','mp3','flv','swf','txt','doc','gif');
        //check and create directory
            if(!is_dir($_uploadPath)){
                mkdir($_uploadPath,0777,true);
              //  return true;
            }
            
           // if(is_dir($_uploadPath)){
                
           foreach($_FILES[$input_name]['tmp_name'] as $key => $tmp_name){
                $file_name = $_FILES[$input_name]['name'][$key];
                $file_tmp_name = $_FILES[$input_name]['tmp_name'][$key];
                $file_size = $_FILES[$input_name]['size'][$key];
                $file_ext  = explode('.',$_FILES[$input_name]['name'][$key]);
                $file_ext  = strtolower(end($file_ext));
    
                if(!in_array($file_ext,$_file_type)){
                    $msg_error = false;
                }
                if($file_size > $max_filesize){
                    $msg_error = false;
                }
                if(is_writable($_uploadPath)){
                    $msg_error = false;																										
                }
    
                if(move_uploaded_file($file_tmp_name,$_uploadPath.$file_name)){
                    $msg_error = true;
                }
            }
         //   }
        return $msg_error;
    }
    
    
    function get_files_name($_inputname,$_url){
        
        foreach($_FILES[$_inputname]['tmp_name'] as $_key => $tmp_name){
            $_file_name[] = $_FILES[$_inputname]['name'][$_key];
        }
        
        foreach($_file_name as $_name){
            $file[] = $_url.$_name;
            
            $files = implode(' ',$file);
        }
        
        return $files;
    }
    
    function check_session($_session_name){
        $session_login = $this->CI->session->userdata($_session_name);
        if(!empty($session_login) && isset($session_login)){
            return true;
        }else{
            return false;
        } 
    }
    
    function load_template($_view,$_data=''){
        $this->CI->load->view($_view,$_data);
    }
    
    function load_login($_data=''){
        $this->CI->load->view('admin/admin_login',$_data);
    }
    
    function title_limits($maxchar,$title){

          //  $title = get_the_title();
        
            if(strlen($title) > $maxchar && ($espacio = strpos($title," ",$maxchar))){
        
                $title = substr($title, 0 , $espacio);
        
                $title = $title;
        
                return $title.'...';
        
            }else{
        
                return $title.'...';
        
            }

    }
    
    function get_thumbs($_content){
        
        $regex = "/\<img\s*src\s*=\s*\"([^\"]*)\"[^\>]*\>/";
        
        $match = preg_match($regex,$_content, $matches);
        if($match){
             return $matches[1];
        }else{
             echo '<img src="/images/news/defaultVideo.png" alt="hinh">';
        }
    }
    
    function get_categories(){
        $this->CI->load->model('defaultmodel');
        $result = $this->CI->defaultmodel->getAll('danhmuc');
        return $result;
    }
    
    function get_setting($_field, $_table){
        $list_img[] = "";
        $this->CI->load->model('defaultmodel');
        $_result = $this->CI->defaultmodel->get_field($_field,$_table);
        
        if($_result){
            foreach($_result->result() as $_list){
                $list_img += explode("http://",$_list->$_field);
            }
            
            unset($list_img['0']);
        }
        
        return $list_img;
        
    }
    
    function send_user_email($email,$name,$content){
         $this->CI->load->library('email');
         $this->CI->load->library('parser');
                
                    $config = Array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'ssl://smtp.googlemail.com',
                        'smtp_port' => 465,
                        'smtp_user' => 'bachnx2303@gmail.com',
                        'smtp_pass' => 'Chuotnho72',
                        'mailtype'  => 'html', 
                        'charset'   => 'utf-8'
                    );
                    $this->CI->email->clear();
                    $config['mailtype'] = "html";
                    $this->CI->email->initialize($config);
                    $this->CI->email->set_newline("\r\n");
                    $this->CI->email->from("$email", "$name");
                    $list = 'ard.bach.nguyen@gmail.com';
                    $this->CI->email->to($list);
                    $data = array();
                   // $htmlMessage = $this->parser->parse('messages/email', $data, true);
                    $this->CI->email->subject('Gửi từ shop Hoa đẹp tươi');
                    $this->CI->email->message("$content");
                
                    
                
                    if ($this->CI->email->send()) {
                       return true;
                    } else {
                        show_error($this->CI->email->print_debugger());
                    }
    }
    
    function send_contact_email($email,$name,$content){
         $this->CI->load->library('email');
         $this->CI->load->library('parser');
                
                    $config = Array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'ssl://smtp.googlemail.com',
                        'smtp_port' => 465,
                        'smtp_user' => 'bachnx2303@gmail.com',
                        'smtp_pass' => 'Chuotnho72',
                        'mailtype'  => 'html', 
                        'charset'   => 'utf-8'
                    );
                    $this->CI->email->clear();
                    $config['mailtype'] = "html";
                    $this->CI->email->initialize($config);
                    $this->CI->email->set_newline("\r\n");
                    $this->CI->email->from("$email", "$name");
                    $list = 'ard.bach.nguyen@gmail.com';
                    $this->CI->email->to($list);
                    $data = array();
                   // $htmlMessage = $this->parser->parse('messages/email', $data, true);
                    $this->CI->email->subject('Gửi từ shop Hoa đẹp tươi');
                    $this->CI->email->message("$content");
                
                    
                
                    if ($this->CI->email->send()) {
                       return true;
                    } else {
                        show_error($this->CI->email->print_debugger());
                    }
    }
}