<?php 
  session_start();

class Home extends CI_Controller{
    
    var $session;
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
        //Kiểm tra session người đăng nhập    
        if($this->defaultlib->check_session('fl_adm_in')){
            //Lấy danh sách từ bảng quản trị.
            $_result = $this->defaultmodel->getAll('quantri');
            $data = array(
                '_title'         =>  'Quản trị | Trang chủ',
                '_adm_left'      =>  'admin/menus/admin_menu',
                '_adm_right'     =>  'admin/admin_home',
                '_adm_home_data' =>  $_result->result()  
            );
            
            $this->defaultlib->load_template('includes/admin/admin_template',$data);
            
        }else{
            //Chưa đăng nhập => Chuyển hướng về trang đăng nhập và thông báo lỗi.
            $this->defaultlib->load_login('Bạn chưa đăng nhập, Vui lòng đăng nhập trước');
        }   
         
    }
    
     function cofiguration($_action=''){
            $session = $this->defaultlib->check_session('fl_adm_in');
        if($session):
             $quyen = $this->session->userdata('fl_adm_in');
            if($quyen['ma_quyen'] == 1){
                    switch($_action){
                    case 'save':
                               $allowedTags='<p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
                               $allowedTags.='<li><ol><ul><span><div><br><ins><del>';
                        $_uploads = $this->defaultlib->upload_multiFles('slide','configs');
                        if($_uploads){
                            $_baseurl = base_url().'public/uploads/configs/';
                            $data['tencauhinh']     =  $this->input->post('name');
                            $data['mota']           =  strip_tags(stripslashes($this->input->post('content')),$allowedTags);
                            $data['loai']           =  $this->input->post('type');
                            $data['noidung']        =  $this->defaultlib->get_files_name('slide',$_baseurl);
                            
                           $_query = $this->defaultmodel->insertdb($data,'caidat');
                                if($_query){
                                    $data = array(
                                        '_title'             =>  'Quản trị | Cài đặt slide',
                                        '_adm_left'         =>  'admin/menus/admin_config_menu',
                                        '_adm_right'        =>  'admin/config/slide_create',
                                    );
                                    
                                    $this->defaultlib->load_template('includes/admin/admin_template',$data);
                                }else{
                                    
                                    
                                }
                          }
                    break;
                    case 'slide':
                        $data = array(
                            '_title'             =>  'Quản trị | Cài đặt slide',
                            '_adm_left'         =>  'admin/menus/admin_config_menu',
                            '_adm_right'        =>  'admin/config/slide_create',
                        );
                        
                        $this->defaultlib->load_template('includes/admin/admin_template',$data);
                    break;
                    case 'delete':
                        $this->defaultmodel->delete_where(array('ma'=>$this->input->post('id')),'caidat');
                        echo 'true';
                    break;
                    default:
                        $_config_data = $this->defaultmodel->getAll('caidat');
                        $_img = $this->defaultlib->get_setting('noidung','caidat');
                        $data = array(
                            '_title'             =>  'Quản trị | Cài đặt',
                            '_adm_left'         =>  'admin/menus/admin_config_menu',
                            '_adm_right'        =>  'admin/config/adm_view_config',
                            '_adm_config_data'  =>  $_config_data->result(),
                            '_list_img'         =>  $_img
                        );
                        
                        $this->defaultlib->load_template('includes/admin/admin_template',$data);
                    break;
                }
            }else{
                $this->load->view('403');
            }
            
        else:
            $this->defaultlib->load_login('Bạn chưa đăng nhập, Vui lòng đăng nhập trước');
        endif;
            
    }
    
    function sell_out(){
        if($this->defaultlib->check_session('fl_adm_in')):
            $_sellout_data = $this->defaultmodel->get_where(array('soluong <=' => 5),'sanpham');
            $_sellout = array(
                '_title'    =>  'Quản trị | Thống kê',
                '_adm_left'=> 'admin/menus/admin_home_menu',
                '_adm_right'=>  'admin/home/admin_sellout',
                '_sellout'  =>  $_sellout_data->result()
            );
            $this->defaultlib->load_template('includes/admin/admin_template',$_sellout);
        else:
            $this->defaultlib->load_login('Bạn chưa đăng nhập, Vui lòng đăng nhập trước');
        endif;
    }
    
    function inventory(){
        if($this->defaultlib->check_session('fl_adm_in')):
			$date = date("d-m-Y");
            $qdata = array();
            $result = $this->defaultmodel->getAll('sanpham');
            
            foreach($result->result() as $rs):
            
                $count = abs(strtotime($rs->ngaytao) - strtotime($date)); 
                 $timedown = floor($count/(60*60*24))."<br />";
                 
                if($timedown >= 07 && $timedown <= 14){
                    
                    $_import = $this->defaultmodel->get_import_product($rs->ngaytao,$date,$rs->ma);
                    $_sell = $this->defaultmodel->get_product_qty($rs->ngaytao,$date,$rs->ma);
                    
                    foreach($_sell as $out){
                        foreach($_import as $in){
                            if($in->ma_sp == $out->masp){
                                $count_pro = abs($in->soluong - $out->soluong);
                                if($count_pro > 0){
                                    $id = $in->ma_sp;
                                $name = $this->defaultmodel->get_row(array('ma'=>$in->ma_sp),'sanpham','tensp');
                                
                                $images = $this->defaultmodel->get_row(array('ma'=>$in->ma_sp),'sanpham','anh');
                                
                                $data["name"]= $name;
                                $data["count"] = $count_pro;
                                $data["id"] = $id;
                                $data["image"] = $images; 
                                array_push($qdata,$data);
                                }
                                
                            }
                        }
                        
                    }
                    
                    
                }
            endforeach; 
		
            $_sellout = array(
                '_title'    =>  'Quản trị | Thống kê',
                '_adm_left'=> 'admin/menus/admin_home_menu',
                '_adm_right'=>  'admin/home/admin_inventory',
                '_data'   =>  $qdata
            );
            $this->defaultlib->load_template('includes/admin/admin_template',$_sellout);
        else:
            $this->defaultlib->load_login('Bạn chưa đăng nhập, Vui lòng đăng nhập trước');
        endif;
    }
    
    function quarter($_action = ''){
        if($this->defaultlib->check_session('fl_adm_in')){
            switch($_action){
                case 'statistic':
                    $_date = $this->input->post("date");
                    $_sell_money = 0;//$this->defaultmodel->get_revenue_month($_date,'ngaytao','thanhtien','chitiet_donhang');
                    $_fund_money = 0;//$this->defaultmodel->get_revenue_month($_date,'ngaynhap','thanhtien','nhaphang');
                    $_get_sell_product = $this->defaultmodel->get_order_statistic($_date);
					
					foreach($_get_sell_product as $_sell){
						$_sell_money = $_sell_money + $_sell->thanhtien;
						$_fund_money = $_fund_money + ($_sell->giatien * $_sell->soluong);
					}
                    $_quarter_data = array(
                        '_view'       => 'view',
                        '_sell_money' => $_sell_money,
                        '_fund_money' => $_fund_money,
                        '_sell_product'=> $_get_sell_product
                    );
                    $this->load->view('admin/home/admin_revenue_month',$_quarter_data);
                break;
                default:
                    $_quarter = array(
                        '_title'    =>  'Quản trị | lãi theo quý',
                        '_adm_left'=> 'admin/menus/admin_home_menu',
                        '_adm_right'=>  'admin/home/admin_revenue_month',
                    );
                    
                    $this->defaultlib->load_template('includes/admin/admin_template',$_quarter);
                break;
            }
        }else{
            $this->defaultlib->load_login('Bạn chưa đăng nhập, Vui lòng đăng nhập trước');
        }
    }
    
    function month($_action = ''){
        if($this->defaultlib->check_session('fl_adm_in')){
            switch($_action){
                case 'statistic':
                    $date = getdate();
                    
                    
                    $_quarter = $this->input->post('quarter');
                        if($_quarter == 1){
                            $start = '01-'.$date['year'];
                            $end = '03-'.$date['year'];
                        }
                        if($_quarter == 2){
                            $start = '04-'.$date['year'];
                            $end = '06-'.$date['year'];
                        }
                        if($_quarter == 3){
                            $start = '07-'.$date['year'];
                            $end = '09-'.$date['year'];
                        }
                        if($_quarter == 4){
                            $start = '10-'.$date['year'];
                            $end = '12-'.$date['year'];
                        }
                    $_sell_money = 0;//$this->defaultmodel->get_revenue_quarter($start,$end,'ngaytao','thanhtien','chitiet_donhang');
                    $_fund_money = 0;//$this->defaultmodel->get_revenue_quarter($start,$end,'ngaynhap','thanhtien','nhaphang');
                    $_get_sell_product = $this->defaultmodel->get_order_quarter($start,$end);  
                        foreach($_get_sell_product as $_sell){
							$_sell_money = $_sell_money + $_sell->thanhtien;
							$_fund_money = $_fund_money + ($_sell->giatien * $_sell->soluong);
						}
                    $_month_data = array(
                        '_view'       => 'view',
                        '_quarter'    =>  $_quarter,  
                        '_sell_money' => $_sell_money,
                        '_fund_money' => $_fund_money,
                        '_sell_product'=> $_get_sell_product
                    );
                    $this->load->view('admin/home/admin_revenue_quarter',$_month_data);
                break;
                default:
                    $_month = array(
                        '_title'    =>  'Quản trị | Lãi theo quý',
                        '_adm_left'=>  'admin/menus/admin_home_menu',
                        '_adm_right'=>  'admin/home/admin_revenue_quarter',
                    );
                    
                    $this->defaultlib->load_template('includes/admin/admin_template',$_month);
                break;
            }
        }else{
            $this->defaultlib->load_login('Bạn chưa đăng nhập, Vui lòng đăng nhập trước');
        }
        
    }
    
    function year($_action=''){
        if($this->defaultlib->check_session('fl_adm_in')){
            switch($_action){
                case 'statistic':
                    $year = $this->input->post('year');
                    $_sell_money = 0;//$this->defaultmodel->get_revenue_year($year,'ngaytao','thanhtien','chitiet_donhang');
                    $_fund_money = 0;//$this->defaultmodel->get_revenue_year($year,'ngaynhap','thanhtien','nhaphang');
                    $_sell_product= $this->defaultmodel->get_order_year($year);
					foreach($_sell_product as $_sell){
						$_sell_money = $_sell_money + $_sell->thanhtien;
						$_fund_money = $_fund_money + ($_sell->giatien * $_sell->soluong);
					}
                   $_year_data = array(
                        '_view'       => 'view',
                        '_sell_money' => $_sell_money,
                        '_fund_money' => $_fund_money,
                        '_sell_product'=> $_sell_product
                    );
                    $this->load->view('admin/home/admin_revenue_year',$_year_data);
                break;
                default:
                    
                    $_year = array(
                        '_title'    =>  'Quản trị | Lãi theo năm',
                        '_adm_left'=> 'admin/menus/admin_home_menu',
                        '_adm_right'=>  'admin/home/admin_revenue_year',
                    );
                    
                    $this->defaultlib->load_template('includes/admin/admin_template',$_year);
                break;
            }
        }else{
            $this->defaultlib->load_login('Bạn chưa đăng nhập, Vui lòng đăng nhập trước');
        }
    }
    
    function total_sell(){
        $date = getdate();
        $_sell_product= $this->defaultmodel->get_order_year($date['year']);
        $_total_sell = array(
                        '_title'    =>  'Quản trị | Tổng số hàng đã bán',
                        '_adm_left'=> 'admin/menus/admin_home_menu',
                        '_adm_right' =>   'admin/home/admin_total_sellproduct',
                        '_sell_product'=> $_sell_product
                    );
        $this->defaultlib->load_template('includes/admin/admin_template',$_total_sell);
        
    }
    function revenue(){
        $_total_sell = array(
                        '_title'    =>  'Quản trị | Doanh thu',
                        '_adm_left'=> 'admin/menus/admin_home_menu',
                        '_adm_right' =>   'admin/home/admin_revenue',
                       // '_sell_product'=> $_sell_product
                    );
        $this->defaultlib->load_template('includes/admin/admin_template',$_total_sell);
    }
}