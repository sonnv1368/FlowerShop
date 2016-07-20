<?php 

session_start();

class Products extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('defaultmodel');
    }
    
    function index($_type=''){
        
        if($this->defaultlib->check_session('fl_adm_in')){
            switch($_type){
                case 'type':
                    $_pro_type = $this->defaultmodel->getAll('danhmuc');
                    $data = array(
                        '_title'        =>  'Quản trị | Loại sản phẩm',
                        '_adm_left'     =>  'admin/menus/admin_type_pro_menu',
                        '_adm_right'    =>  'admin/products/admin_protype',
                        '_admin_data'   =>  $_pro_type->result()
                    );
                    
                    $this->defaultlib->load_template('includes/admin/admin_template',$data);
                break;
                default:
                    $_pro_data = $this->defaultmodel->getAll('sanpham');
                    $data = array(
                        '_title'        =>  'Quản trị | Sản phẩm',
                        '_adm_left'     =>  'admin/menus/admin_pro_menu',
                        '_adm_right'    =>  'admin/products/admin_product',
                        '_admin_data'   =>  $_pro_data->result()
                    );
                    
                    $this->defaultlib->load_template('includes/admin/admin_template',$data);
                break;
            }
        }else{
            $this->defaultlib->load_login('Bạn chưa đăng nhập! Vui lòng đăng nhập trước');
        }
        
    }
    
    function create_categories($_action = ''){
        
        if($this->defaultlib->check_session('fl_adm_in')){
                switch($_action){
                    case 'create_pro':
                            $data = array(
                                '_title'        =>  'Quản trị | Thêm loại',
                                '_adm_left'     =>  'admin/menus/admin_type_pro_menu',
                                '_adm_right'    =>  'admin/products/admin_protype_create',
                            );
                            $this->defaultlib->load_template('includes/admin/admin_template',$data);
                        break;
                    case 'savetodb':
                    
                            $upload = $this->defaultlib->upload_multiFles('protype','products');
                            if($upload){
                                    $base_url = base_url().'public/uploads/products/';
                                    $data['tendanhmuc']     =  $this->input->post('name');
                                    $data['mota']           =  $this->input->post('desc');
                                    $data['anh']            =  $this->defaultlib->get_files_name('protype',$base_url);
                                    
                                    $_query = $this->defaultmodel->insertdb($data,'danhmuc');
                                     $data = array(
                                        '_title'        =>  'Quản trị | Thêm loại',
                                        '_adm_left'     =>  'admin/menus/admin_type_pro_menu',
                                        '_adm_right'    =>  'admin/products/admin_protype_create',
                            );
                            $this->defaultlib->load_template('includes/admin/admin_template',$data);
                            }else{
                                echo 'Upload ảnh lỗi! ';
                            }
                            
                        break;
                    default:
                            $_pro_type = $this->defaultmodel->getAll('danhmuc');
                            
                            $data = array(
                                '_title'        =>  'Quản trị | Loại sản phẩm',
                                '_adm_left'     =>  'admin/menus/admin_type_pro_menu',
                                '_adm_right'    =>  'admin/products/admin_protype',
                                '_admin_data'   =>  $_pro_type->result()
                            );
                    
                            $this->defaultlib->load_template('includes/admin/admin_template',$data);
                        break;
                }
        }else{
            $this->defaultlib->load_login('Bạn chưa đăng nhập! Vui lòng đăng nhập trước');
        }
    }
    
    function create_products($_action = ''){
        
        if($this->defaultlib->check_session('fl_adm_in')){
                switch($_action){
                    case 'creates':
                        $_type = $this->defaultmodel->getAll('danhmuc');
                        $data = array(
                                '_title'        =>  'Quản trị | Thêm sản phẩm',
                                '_adm_left'     =>  'admin/menus/admin_pro_menu',
                                '_adm_right'    =>  'admin/products/admin_product_create',
                                '_adm_type'     =>  $_type->result()
                            );
                        $this->defaultlib->load_template('includes/admin/admin_template',$data);
                    break;
                    case 'savetodb_pro':
                            $upload = $this->defaultlib->upload_multiFles('products','products');
                            if($upload){
                                    $base_url = base_url().'public/uploads/products/';
                                    $data['tensp']     =  $this->input->post('name');
                                    $data['mota']           =  $this->input->post('desc');
                                    $data['ma_danhmuc']     =   $this->input->post('danhmuc');
                                    $data['soluong']        =   $this->input->post('quantity');
									$data['ngaytao']		=	date('d-m-Y');
                                    $data['giaban']         =   $this->input->post('price');
									$data['gianhap']		=	 $this->input->post('inprice');
                                    $data['anh']            =  $this->defaultlib->get_files_name('products',$base_url);
                                    
                                    $_query = $this->defaultmodel->insertdb($data,'sanpham');
                                    
                                    if($_query){
                                        $_product_id = $this->defaultmodel->get_row(array('tensp'=>$data['tensp']),'sanpham','ma');
                                        $_log_product = array(
                                            'ma_sp'     =>  $_product_id,
                                            'ngaynhap'  =>  date('d-m-Y'),
                                            'soluong'   =>  $data['soluong'],
                                            'giatien'   =>   $data['gianhap'],
											'thanhtien' =>  ( $data['gianhap'] * $data['soluong'])
                                        );
                                        
                                        $this->defaultmodel->insertdb($_log_product,'nhaphang');
                                        
                                        $_type = $this->defaultmodel->getAll('danhmuc');
                                        $data = array(
                                            '_title'        =>  'Quản trị | Thêm sản phẩm',
                                            '_adm_left'     =>  'admin/menus/admin_pro_menu',
                                            '_adm_right'    =>  'admin/products/admin_product_create',
                                            '_adm_type'     =>  $_type->result()
                                        );
                                        $this->defaultlib->load_template('includes/admin/admin_template',$data);
                                    }
                            }else{
                                echo 'Upload ảnh lỗi! ';
                            }
                    break;
                    default:
                        $_pro_data = $this->defaultmodel->getAll('sanpham');
                        $data = array(
                            '_title'        =>  'Quản trị | Sản phẩm',
                            '_adm_left'     =>  'admin/menus/admin_pro_menu',
                            '_adm_right'    =>  'admin/products/admin_product',
                            '_admin_data'   =>  $_pro_data->result()
                        );
                    
                        $this->defaultlib->load_template('includes/admin/admin_template',$data);
                    break;
                }
        }else{
             $this->defaultlib->load_login('Bạn chưa đăng nhập! Vui lòng đăng nhập trước');
        }
    }
    
    function edit_products($_action='', $_id=''){
        
        if($this->defaultlib->check_session('fl_adm_in')){
            
            switch($_action){
                
             case 'edit':
                $_type = $this->defaultmodel->getAll('danhmuc');
                $_product = $this->defaultmodel->get_where(array('ma' => $_id),'sanpham'); 
                    $data = array(
                            '_title'        =>  'Quản trị | Thêm sản phẩm',
                            '_adm_left'     =>  'admin/menus/admin_pro_menu',
                            '_adm_right'    =>  'admin/products/admin_product_create',
                            '_pro_data'     =>  $_product->result_array(),
                            '_adm_type'     =>  $_type->result()
                    );
                    $this->defaultlib->load_template('includes/admin/admin_template',$data);
             break;
             
             case 'save':
                $_image =$this->input->post('hid_products');
                if(!empty($_image)){
                        $upload = $this->defaultlib->upload_multiFles('products','products');
                        if($upload){
                            $base_url = base_url().'public/uploads/products/';
                            $data['anh'] =  $this->defaultlib->get_files_name('products',$base_url);
                        }
                }
                
                $data['tensp']     =  $this->input->post('name');
                $data['mota']           =  $this->input->post('desc');
                $data['ma_danhmuc']     =   $this->input->post('danhmuc');
                $data['giaban']         =   $this->input->post('price');
                $data['gianhap']		=	 $this->input->post('inprice');
                $_update_qty = $this->defaultmodel->get_where(array('ma'=>$_id,'soluong'=>$this->input->post('quantity')),'sanpham');
                $rs = $_update_qty->result();
                 if(empty($rs)){
				 $data['soluong'] = $this->input->post('quantity');
                    $_log_product = array(
                        'ma_sp'     =>  $_id,
                        'ngaynhap'  =>  date('d-m-Y'),
                        'soluong'   =>  $data['soluong'],
                        'giatien'   =>  $data['gianhap'],
						'thanhtien' =>  ($data['gianhap'] * $data['soluong'])
                    );
                     $this->defaultmodel->insertdb($_log_product,'nhaphang');
                     $data['soluong']  =   $this->input->post('quantity');
                }
                $_query = $this->defaultmodel->update($data,'sanpham',array('ma' => $_id)); 
                if($_query){
                    $_type = $this->defaultmodel->getAll('danhmuc');
                    
                    $_product = $this->defaultmodel->get_where(array('ma' => $_id),'sanpham');
                     
                    $edit = array(
                            '_title'        =>  'Quản trị | Thêm sản phẩm',
                            '_adm_left'     =>  'admin/menus/admin_pro_menu',
                            '_adm_right'    =>  'admin/products/admin_product_create',
                            '_pro_data'     =>  $_product->result_array(),
                            '_adm_type'     =>  $_type->result()
                    );
                    $this->defaultlib->load_template('includes/admin/admin_template',$edit);
                }
             break;
             case 'delete':
                $del_id = $this->input->post('id');
                $_query = $this->defaultmodel->delete_where(array('ma' => $del_id),'sanpham');
                if($_query){
                    echo 'true';
                }else{
                    echo 'false';
                }
             break;
         }
        }else{
             $this->defaultlib->load_login('Bạn chưa đăng nhập! Vui lòng đăng nhập trước');
        }
         
    }/** end of function edit_products()*/
    
    function edit_cate_products($_action='', $_id=''){
        if($this->defaultlib->check_session('fl_adm_in')){
            
            switch($_action){
                
             case 'edit-cate':
                $_product_cate = $this->defaultmodel->get_where(array('ma' => $_id),'danhmuc'); 
                     $data = array(
                                '_title'        =>  'Quản trị | Thêm loại',
                                '_adm_left'     =>  'admin/menus/admin_type_pro_menu',
                                '_adm_right'    =>  'admin/products/admin_protype_create',
                                '_cate_data'    =>  $_product_cate->result()
                     );
                $this->defaultlib->load_template('includes/admin/admin_template',$data);
                
             break;
             
             case 'save-cate':
                $_image =$this->input->post('hid_protype');
                if(!empty($_image)){
                        $upload = $this->defaultlib->upload_multiFles('protype','products');
                        if($upload){
                            $base_url = base_url().'public/uploads/products/';
                            $data['anh'] =  $this->defaultlib->get_files_name('protype',$base_url);
                        }
                }
                
                $data['tendanhmuc']     =  $this->input->post('name');
                $data['mota']           =  $this->input->post('desc');
                
                $_query = $this->defaultmodel->update($data,'danhmuc',array('ma' => $_id));
                if($_query){ 
                     
                    $_product_cate = $this->defaultmodel->get_where(array('ma' => $_id),'danhmuc'); 
                     $data = array(
                                '_title'        =>  'Quản trị | Thêm loại',
                                '_adm_left'     =>  'admin/menus/admin_type_pro_menu',
                                '_adm_right'    =>  'admin/products/admin_protype_create',
                                '_cate_data'    =>  $_product_cate->result()
                     );
                    $this->defaultlib->load_template('includes/admin/admin_template',$data);
                }
             break;
             case 'delete':
                $del_id = $this->input->post('id');
                $_query = $this->defaultmodel->delete_where(array('ma' => $del_id),'danhmuc');
                if($_query){
                    echo 'true';
                }else{
                    echo 'false';
                }
             break;
         }
        }else{
             $this->defaultlib->load_login('Bạn chưa đăng nhập! Vui lòng đăng nhập trước');
        }
    }
    
    function view_order(){
        $order = $this->defaultmodel->get_order();
		if($order->num_rows > 0){
				$view_order = array(
				'_title'        =>  'Quản trị | Xem đơn hàng',
				'_adm_left'     =>  'admin/menus/adm_order_menus',
				'_adm_right'    =>  'admin/order/admin_allorder',
				'_view_order'   =>  $order->result()
			);
        
	        $this->defaultlib->load_template('includes/admin/admin_template',$view_order);
		}else{
			$view_order = array(
				'_title'        =>  'Quản trị | Xem đơn hàng',
				'_adm_left'     =>  'admin/menus/adm_order_menus',
				'_adm_right'    =>  '404'
			);
			 $this->defaultlib->load_template('includes/admin/admin_template',$view_order);
		}
        
    }
    
    function change_status(){
        $_product_id = $this->defaultmodel->get_row(array('ma'=>$this->input->post('detail_id')),'chitiet_donhang','masp');
        $_product_qty = $this->defaultmodel->get_row(array('ma'=>$_product_id),'sanpham','soluong');
         
       if($_product_qty >= $this->input->post('qty')){
            $_product_qty = $_product_qty - $this->input->post('qty');
            
            $_update_pro = $this->defaultmodel->update(array('soluong'=>$_product_qty),'sanpham',array('ma'=>$_product_id));
            if($_update_pro){
                $_query = $this->defaultmodel->update(array('trangthai' => 'Đã xử lý'),'chitiet_donhang',array('ma'=>$this->input->post('detail_id')));
                if($_query){
                    die("true");
                }else{
                    die("false");
                }    
            }else{
                die('false');
            }
            
       }else{
            die('false');
       }
    }
	function delete_order($id){
			$order_id = $this->defaultmodel->get_where(array("ma_donhang" => $id),"chitiet_donhang");
			$this->defaultmodel->delete_where(array("ma"=>$id),'donhang');
		foreach($order_id->result() as $id){
			$this->defaultmodel->delete_where(array("ma"=>$id->ma),'chitiet_donhang');
		}
			
			
				$order = $this->defaultmodel->get_order();
				if($order->num_rows > 0){
						$view_order = array(
						'_title'        =>  'Quản trị | Xem đơn hàng',
						'_adm_left'     =>  'admin/menus/adm_order_menus',
						'_adm_right'    =>  'admin/order/admin_allorder',
						'_view_order'   =>  $order->result()
					);
				
					$this->defaultlib->load_template('includes/admin/admin_template',$view_order);
				}else{
					$view_order = array(
						'_title'        =>  'Quản trị | Xem đơn hàng',
						'_adm_left'     =>  'admin/menus/adm_order_menus',
						'_adm_right'    =>  '404'
					);
					 $this->defaultlib->load_template('includes/admin/admin_template',$view_order);
				} 
			
		
	}
}