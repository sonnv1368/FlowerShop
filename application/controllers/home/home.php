<?php 
session_start();
class Home extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model("defaultmodel");
        $this->load->library('pagination');
    }
    
    function index(){
        $new_product = $this->defaultmodel->get_orderby('ngaytao desc',6,'sanpham');
        $special_product = $this->defaultmodel->get_orderby('lanban desc',6,'sanpham');
        
        $data = array(
            '_content' =>   'home/index',
            '_new_product'=> $new_product->result(),
            '_special_product'=>$special_product->result()
        );
         $this->defaultlib->load_template('includes/default/home_template',$data);
    }
    
    function news($_action = '',$_news_id=''){
        
        switch($_action){
            case 'views':
                $_news_views = $this->defaultmodel->get_where(array('ma'=>$_news_id,'loai_tin'=>'news'),'tintuc');
                if($_news_views):
                    $data = array(
                        '_content'          =>  'home/view_news',
                        '_views_content'    =>  $_news_views->result()   
                    );
                    $this->defaultlib->load_template('includes/default/home_template',$data);
                endif;
            break;
            default:
                $_news_data = $this->defaultmodel->get_where(array('loai_tin'=>'news'),'tintuc');
                $data = array(
                    '_content'  =>  'home/all_news',
                    '_news_data'=>  $_news_data->result()
                );
                
                $this->defaultlib->load_template('includes/default/home_template',$data);
            break;
        }
    }
    
    function about(){
                $_news_views = $this->defaultmodel->get_where(array('loai_tin'=>'about'),'tintuc');
                if($_news_views):
                    $data = array(
                        '_content'          =>  'home/about',
                        '_views_content'    =>  $_news_views->result()   
                    );
                    $this->defaultlib->load_template('includes/default/home_template',$data);
                endif;
    }
    
    function contact($_action=''){
        switch($_action){
            case 'send':
                    
                    $name = $this->input->post('name');
                    $email = $this->input->post('email');
                    $content= $this->input->post('content');
                    
                    $mail = $this->defaultlib->send_contact_email($name,$email,$content);
                    if($mail){
                        echo 'true';
                    }else{
                        echo 'false';
                    }
            break;
            default:
                $data = array(
                        '_content'          =>  'home/contact',
                      //  '_views_content'    =>  $_news_views->result()   
                    );
                    $this->defaultlib->load_template('includes/default/home_template',$data);
            break;
        }
    }
    
    function login(){
        $data['taikhoan'] = $this->input->post("username");
        $data['matkhau'] = md5($this->input->post("password"));
        
        $_query = $this->defaultmodel->get_where($data,'khachhang');
        if($_query->num_rows > 0){
            foreach($_query->result() as $_data){
                $displayname = $_data->tenhienthi;
                $id = $_data->ma;
                $email  =   $_data->email;
            }
            
            $set_session = array(
                'disname'   =>  $displayname,
                'username'  =>  $data['taikhoan'],
                'id'        =>  $id
            );
            
            $this->session->set_userdata('fl_home_in',$set_session);
            
            echo 'true';
        }else{
            echo 'false';
        }
        
    }
    
    function logout(){
        $this->session->unset_userdata('fl_home_in');
        $this->cart->destroy();
        session_destroy();
        $this->index();
    }
    
   
}