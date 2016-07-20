<?php 

class Membership extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('defaultmodel');
    }
    
    function index($_action='',$_id=''){
         switch($_action){
                case 'create':
                    $_member_data = array(
                        '_content'  => 'home/home_create_membership',
                    );
                    $this->defaultlib->load_template('includes/default/home_template',$_member_data);
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
                    
                    if($_check_acc->num_rows > 0){
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
    }
    
    function userprofile($_action=''){
        
        switch($_action){
            case 'save':
                $id = $this->input->post('id');
                    $password = $this->input->post('password');
                    $data = array(
                        'tendaydu'  =>  $this->input->post('fullname'),
                        'gioitinh'  =>  $this->input->post('gender'),
                        'namsinh'   =>  $this->input->post('birthday'),
                        'diachi'    =>  $this->input->post('address'),
                        'sodt'      =>  $this->input->post('phone'),
                        'email'     =>  $this->input->post('email'),
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
            default:
                $data = $this->defaultmodel->get_where(array('taikhoan' => $this->input->post('uname')),'khachhang');
                if($data){
                    $view_profile = array(
                        '_edit_member' => $data->result()
                    );
                    
                    $this->load->view('home/userprofile',$view_profile);
                }else{
                    $this->load->view('home/404');
                }
            break;
        } 
    }
    
    function forgot_pass($_action = ''){
        switch($_action){
            case 'reset':
                $name = $this->input->post('name');
                $mak  = md5($this->input->post('email'));
                $emai_check = $this->defaultmodel->get_where(array('taikhoan'=>$name),'khachhang');
                if($emai_check->num_rows > 0){
                    $query = $this->defaultmodel->update(array('matkhau' => $mak),'khachhang',array('taikhoan' => $name));
                    if($query){
                        echo 'true';
                    }else{
                        echo 'false';
                    }
                }else{
                    echo 'false';
                }
            break;
            default:
                $this->defaultlib->load_template('includes/default/home_template',array('_content'=>'home/forget_pass'));
            break;
        }
    }
}