<?php 

session_start();
class Membership extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('defaultmodel');
    }
    
    function index(){
        if($this->defaultlib->check_session('fl_adm_in')){
            $_member = $this->defaultmodel->getAll('khachhang');
            $_member_data = array(
                '_title'        =>  'Quản trị | Thành viên',
                '_adm_left'     =>  'admin/menus/adm_membership_menus',
                '_adm_right'  =>  'admin/membership/adm_membership',
                '_members_data'   =>  $_member->result()
            );
            $this->defaultlib->load_template('includes/admin/admin_template',$_member_data);
        }else{
            $this->defaultlib->load_login('Bạn chưa đăng nhập, Vui lòng đăng nhập trước!');
        }
    }
    
    function action($_action='',$_id=''){
        
        if($this->defaultlib->check_session('fl_adm_in')){
            switch($_action){
                case 'create':
                    $_member_data = array(
                        '_title'        =>  'Quản trị | Thành viên',
                        '_adm_left'     =>  'admin/menus/adm_membership_menus',
                        '_adm_right'  =>  'admin/membership/adm_create_membership'
                    );
                    $this->defaultlib->load_template('includes/admin/admin_template',$_member_data);
                break;
                case 'save':
                    $data = array(
                        'taikhoan'  =>   $this->input->post('username'),
                        'matkhau'   =>   md5($this->input->post('password')),
                        'tendaydu'  =>   $this->input->post('fullname'),
                        'gioitinh'  =>   $this->input->post('gender'),
                        'namsinh'   =>   $this->input->post('birthday'),
                        'diachi'    =>   $this->input->post('address'),
                        'sodt'      =>  $this->input->post('phone'),
                        'email'     =>  $this->input->post('email'),
                        'ngaytao'   =>  date('d-m-Y'),
                        'tenhienthi'=>  $this->input->post('disname'),
                        'trangthai' => 1
                    );
                    
                    $_check_acc = $this->defaultmodel->get_where(array('taikhoan' => $data['taikhoan']),'khachhang');
                    
                    if($_check_acc){
                        echo 'Tài khoản đã tồn tại';
                    }else{
                        $_query = $this->defaultmodel->insertdb($data,'khachhang');
                        if($_query){
                            echo 'Tạo tài khoản thành công';
                        }    
                    }
                    
                break;
                case 'edit':
                    $_query = $this->defaultmodel->get_where(array('ma' => $_id),'khachhang');
                    $_member_data = array(
                        '_title'        =>  'Quản trị | Thành viên',
                        '_adm_left'     =>  'admin/menus/adm_membership_menus',
                        '_adm_right'  =>  'admin/membership/adm_create_membership',
                        '_edit_member' => $_query->result()
                    );
                    $this->defaultlib->load_template('includes/admin/admin_template',$_member_data);
                break;
                case 'save-edit':
                    $id = $this->input->post('id');
                    $password = $this->input->post('password');
                    $data = array(
                        'tendaydu'  =>  $this->input->post('fullname'),
                        'gioitinh'  =>  $this->input->post('gender'),
                        'namsinh'   =>  $this->input->post('birthday'),
                        'diachi'    =>  $this->input->post('address'),
                        'sodt'      =>  $this->input->post('phone'),
                        'email'     =>  $this->input->post('email'),
                        'ngaytao'   =>  date('d-m-Y'),
                        'tenhienthi'=>  $this->input->post('disname'),
                        'trangthai' => 1
                    );
                    
                    $_check_pass = $this->defaultmodel->get_where(array('matkhau'=> $password,'ma' =>$id),'khachhang');
                    if(!$_check_pass){
                        $data['matkhau'] = md5($password);
                    }
                    
                    $_query = $this->defaultmodel->update($data,'khachhang',array('ma' => $id));
                    if($_query){
                        echo 'Cập nhập tài khoản thành công';
                    }else{
                        echo 'Cập nhật thất bại';
                    }
                    
                break;
                case 'delete':
                    $_query = $this->defaultmodel->delete_where(array('ma'=>$this->input->post('id')),'khachhang');
                    if($_query){
                        echo "Xóa thành công!";
                    }
                break;
            }
        }else{
            $this->defaultlib->load_login('Bạn chưa đăng nhập, Vui lòng đăng nhập trước!');
        }
    }
    
    function system_user($_action = '', $_id=''){
         if($this->defaultlib->check_session('fl_adm_in')){
                switch($_action){
                    case 'create':
                        $_role_query = $this->defaultmodel->getAll('quyen');
                        $_member_data = array(
                            '_title'        =>  'Quản trị | Nhân viên',
                            '_adm_left'     =>  'admin/menus/adm_human_menus',
                            '_adm_right'    =>  'admin/membership/adm_human_create',
                            '_role_data'    =>  $_role_query->result()
                        );
                        
                        $this->defaultlib->load_template('includes/admin/admin_template',$_member_data);
                    break;
                    case 'save':
                        $data = array(
                            'taikhoan'  =>   $this->input->post('username'),
                            'matkhau'   =>   md5($this->input->post('password')),
                            'tendaydu'  =>   $this->input->post('fullname'),
                            'gioitinh'  =>   $this->input->post('gender'),
                            'diachi'    =>   $this->input->post('address'),
                            'sodt'      =>  $this->input->post('phone'),
                            'email'     =>  $this->input->post('email'),
                            'ma_quyen'  =>  $this->input->post('roles'),
                            'trangthai' => 1
                        );
                        
                        $_check_acc = $this->defaultmodel->get_where(array('taikhoan' => $data['taikhoan']),'quantri');
                       
                        if($_check_acc->num_rows == 0){
                            $_save_query = $this->defaultmodel->insertdb($data,'quantri');
                            if($_save_query){
                                echo 'Tạo tài khoản thành công!';
                            }else{
                                echo 'Lỗi trong quá trình tạo tài khoản';
                            }
                        }else{
                            echo 'Tài khoản đã tồn tại';
                        }
                    break;
                    case 'edit':
                            $_query = $this->defaultmodel->get_where(array('ma' => $_id),'quantri');
                            $_role_query = $this->defaultmodel->getAll('quyen');
                            $_member_data = array(
                                '_title'        =>  'Quản trị | Thành viên',
                                '_adm_left'     =>  'admin/menus/adm_human_menus',
                                '_adm_right'  =>  'admin/membership/adm_human_create',
                                '_edit_human' => $_query->result(),
                                '_role_data'  =>  $_role_query->result()
                            );
                            $this->defaultlib->load_template('includes/admin/admin_template',$_member_data);
                    break;
                    case 'save-edit':
                        $id = $this->input->post('id');
                        $password = $this->input->post('password');
                        $data = array(
                            'tendaydu'  =>  $this->input->post('fullname'),
                            'gioitinh'  =>  $this->input->post('gender'),
                            'diachi'    =>  $this->input->post('address'),
                            'sodt'      =>  $this->input->post('phone'),
                            'email'     =>  $this->input->post('email'),
                            'ma_quyen'  =>  $this->input->post('roles'),
                            'trangthai' => 1
                        );
                        
                        $_check_pass = $this->defaultmodel->get_where(array('ma' => $id,'matkhau' => $password),'quantri');
                        if(!$_check_pass){
                            $data['matkhau']  = md5($password);
                        }
                        $_update_query = $this->defaultmodel->update($data,'quantri',array('ma'=>$id));
                        if($_update_query){
                            echo 'Cập nhât thành công';
                        }else{
                            echo 'Lỗi trong quá trình cập nhật';
                        }
                    break;
                    case 'delete':
                        $_delete_query = $this->defaultmodel->delete_where(array('ma'=>$this->input->post('id')),'quantri');
                        if($_delete_query){
                            echo 'true';
                        }else{
                            echo 'false';
                        }
                    break;
                    default:
                        $_human_query = $this->defaultmodel->getAll('quantri');
                        $_member_data = array(
                        '_title'        =>  'Quản trị | Nhân viên',
                        '_adm_left'     =>  'admin/menus/adm_human_menus',
                        '_adm_right'  =>  'admin/membership/adm_human',
                        '_human_data' => $_human_query->result()
                    );
                    $this->defaultlib->load_template('includes/admin/admin_template',$_member_data);
                    break;
                }
         }else{
             $this->defaultlib->load_login('Bạn chưa đăng nhập, Vui lòng đăng nhập trước!');
         }
    }
}