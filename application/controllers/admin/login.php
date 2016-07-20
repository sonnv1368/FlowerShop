<?php 

  session_start();

class Login extends CI_Controller{
    
    /**
     * @function __construct() 
     * @description 
     */
    function __construct(){
        parent::__construct();
        //Gọi model chung thực hiện các thao tác với csdl.
        $this->load->model('defaultmodel');
    }
    
    /**
     * @function index()
     * @description 
     */
     function index(){
       //Kiểm tra session login vào hệ thống quản trị.
       
       if($this->defaultlib->check_session('fl_adm_in')){
            //Tồn tại session => đã đăng nhập.
              // Chuyển hướng tới trang chủ quản trị.
              redirect(base_url().'admin/home');
       }else{
            //Không tồn tại session => chưa đăng nhập.
              // Chuyển hướng tới trang đăng nhập.
              $this->defaultlib->load_login('');
       } 
     }
     
     /**
      * @function checklogin()
      * @description: 
      */
     function checklogin(){
        // Lây thông tin từ form đăng nhập.
        $data['taikhoan']  =   $this->input->post('username');
        $data['matkhau']   =  md5( $this->input->post('password'));
        
        //Kiểm tra dữ liệu với thông tin đăng nhập.
        $_result = $this->defaultmodel->get_where($data,'quantri');
        
        //Tồn tại thông tin đăng nhập.
        if($_result->num_rows > 0){
            //Lấy thông tin người đăng nhập.
            foreach($_result->result() as $rs){
                $username = $rs->taikhoan;
                $email = $rs->email;
                $full_name = $rs->tendaydu;
                $maquyen   = $rs->ma_quyen;
                $id = $rs->ma;
            }
            
            $data = array(
                'username'  =>  $username,
                'email'     =>  $email,
                'full_name' =>  $full_name,
                'ma_quyen'  =>  $maquyen,
                'ma'        =>  $id
            );
            //Tạo biến session để kiểm tra thông tin đăng nhập.
            $this->session->set_userdata('fl_adm_in',$data);
            //Trả về kết quả để thực hiện xử lý trên form;
            echo('true');
        }else{
            //Không tồn tại thông tin đăng nhập
           echo('false');
        }  
    }
    
    /**
     * @function logout()
     * @description
    */
    function logout(){
        //Hủy session của người đăng nhập hệ thống
        $this->session->unset_userdata('fl_adm_in');
        
        //Hủy session trên hệ thống
        session_destroy();
        
        //Quay trở về trang đăng nhập.
        $this->index();
    }
    
    
}