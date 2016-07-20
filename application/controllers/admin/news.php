<?php 

  session_start();

class News extends CI_Controller{
    
    /**
     * @function __construct()
     * @description
    */
    function __construct(){
        parent::__construct();
        
        $this->load->model('defaultmodel');
    }
    
    /**
     * @function index()
     * @description
    */
    function index(){
        if($this->defaultlib->check_session('fl_adm_in')){
            $_result = $this->defaultmodel->getAll('tintuc');
            
            $data = array(
                '_title'        =>  'Quản trị | Tin tức',
                '_adm_left'     =>  'admin/menus/admin_news_menu',
                '_adm_right'  =>  'admin/news/admin_news',
                '_admin_data'   =>  $_result->result()
            );
            
            $this->defaultlib->load_template('includes/admin/admin_template',$data);
        }else{
            
            $this->defaultlib->load_login('Bạn chưa đăng nhập, Vui lòng đăng nhập trước!');
        }
                
    }
    
    
    /**
     * @function post_news()
     * @description
    */
    function post_news($_action='',$_id=''){
        //Kiểm tra session đăng nhập vào trang quản trị.        
        if($this->defaultlib->check_session('fl_adm_in')){
                //Kiểm tra action gửi từ client.
                switch($_action){
                    case 'post':
                    //post: insert tin tức vào database.
                        $session_name = $this->session->userdata('fl_adm_in');
                        
                        $data['tieude']     =     $this->input->post('title');
                        $data['noidung']    =     $this->input->post('content');
                        $data['tacgia']     =     $session_name['username'];
                        $data['trangthai']  =     1;
                        $data['ngaytao']    =     date('d/m/Y');
                        $data['loai_tin']   =     $this->input->post('type');
                        
                        $_query = $this->defaultmodel->insertdb($data,'tintuc');
                        if($_query){
                            echo 'true';
                        }else{
                            echo 'false';
                        }
                        
                        break;
                    case 'create':
                    //create: Chuyển hướng tới trang form tạo tin tức mới.
                            $data = array(
                                '_title'        =>  'Quản trị | Viết bài mới',
                                '_adm_left'     =>  'admin/menus/admin_news_menu',
                                '_adm_right'  =>  'admin/news/admin_news_create'
                            );
                             $this->defaultlib->load_template('includes/admin/admin_template',$data);
                        break;
                    case 'delete':
                    //delete: Xóa tin tức với id được gửi từ client.
                        $data['ma'] =   $this->input->post('id');
                            $_query = $this->defaultmodel->delete_where($data,'tintuc');
                            if($_query){
                                echo 'true';
                            }else{
                                echo 'false';
                            }
                        break;
                    case 'edit':
                        $_news_data = $this->defaultmodel->get_where(array('ma'=>$_id),'tintuc');
                        $data = array(
                            '_title'        =>  'Quản trị | Tin tức',
                            '_adm_left'     =>  'admin/menus/admin_news_menu',
                            '_adm_right'  =>  'admin/news/admin_news_create',
                            '_admin_data'   =>  $_news_data->result()
                        );
                        
                        $this->defaultlib->load_template('includes/admin/admin_template',$data);
                    break;
                    case 'save':
                        
                        $data['tieude']     =     $this->input->post('title');
                        $data['noidung']    =     $this->input->post('content');
                        $data['loai_tin']   =     $this->input->post('type');
                        
                        $_query = $this->defaultmodel->update($data,'tintuc',array('ma'=>$this->input->post('id')));
                        if($_query){
                            echo 'true';
                        }else{
                            echo 'false';
                        }
                    break;
                    default:
                    //default: gọi trang hiển thị danh sách các bài viết
                            $_news_data = $this->defaultmodel->getAll('tintuc');
                            $data = array(
                                '_title'        =>  'Quản trị | Tin tức',
                                '_adm_left'     =>  'admin/menus/admin_news_menu',
                                '_adm_right'  =>  'admin/news/admin_news',
                                '_admin_data'   =>  $_news_data->result()
                            );
                            
                            $this->defaultlib->load_template('includes/admin/admin_template',$data);  
                        break;
                }
                    
        }else{
            $this->defaultlib->load_template('Bạn chưa đăng nhập, Vui lòng đăng nhập trước!');
        }
        
        
    }
}