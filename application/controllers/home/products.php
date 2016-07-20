<?php 
session_start();

class Products extends CI_Controller{
    
    var $session;
    function __construct(){
        parent::__construct();
        //$this->session = $this->defaultlib->check_session('fl_adm_in');
        $this->load->model('defaultmodel');
        $this->load->library('pagination');
    }
    
    function index(){
        
        $_result = $this->defaultmodel->getAll('danhmuc');
        $data = array(
            '_content'  =>  'home/categories_product',
            '_cate_data' => $_result->result()
        );
        
        $this->defaultlib->load_template('includes/default/home_template',$data);
    }
    
    function view_detail($_id=''){
        $data = array(
            'ma'    =>  $_id
        );
        $_query = $this->defaultmodel->get_where($data,'sanpham');
        
        if($_query->num_rows > 0):
            $_view_detail = array(
                '_content'  =>  'home/view_details_product',
                '_detail'   =>  $_query->result()
            ); 
        
        $this->defaultlib->load_template('includes/default/home_template',$_view_detail);
        
        endif;
    }
    
    function view_cate($_cate_name='',$_id=''){
        $_query = $this->defaultmodel->get_where(array('ma_danhmuc' => $_id),'sanpham');
        
        if($_query):
           /* $view_cate = array(
                '_content'      => 'home/view_category',
                '_cate_data'    => $_query->result(),
                '_cate_name'    => $this->defaultmodel->get_row(array('ma'=>$_id),'danhmuc','tendanhmuc')        
            );*/
                $config['base_url'] =   base_url()."home/products/view_cate/$_cate_name/$_id/";
                $config['total_rows']   =   $this->defaultmodel->countall('sanpham',array('ma_danhmuc'=>$this->uri->segment(5)));
                $config['per_page']     =  12;    
                $config["uri_segment"] = 6;
               
                $this->pagination->initialize($config);
                $start = $this->uri->segment(6);
                $_cate_id = $this->uri->segment(5);
                $data['pagination'] =   $this->pagination->create_links();
                $data['_content']   =   'home/view_category';
                $data['_cate_data']   =   $this->defaultmodel->listall($config['per_page'],$start,'sanpham','ma desc',array('ma_danhmuc' => $_cate_id));
                $data['_cate_name'] =    $this->defaultmodel->get_row(array('ma'=>$_cate_id),'danhmuc','tendanhmuc');
                
                $is_ajax = $this->input->is_ajax_request();
                if($is_ajax):
                    $this->load->view('home/view_category',$data);
                else: 
                    $this->defaultlib->load_template('includes/default/home_template',$data);
                endif;
                    
                    //$this->defaultlib->load_template('includes/default/home_template',$view_cate);
                else:
                    $view_cate = array(
                        '_content'      => 'home/view_category',
                        '_cate_data'    => '',
                        '_cate_name'    => $this->defaultmodel->get_row(array('ma'=>$_id),'danhmuc','tendanhmuc')        
                    );
                    $this->defaultlib->load_template('includes/default/home_template',$view_cate);
        endif;
    }
    
    function search($_action=''){
        
        switch($_action){
            case 'auto':
                $result = $this->defaultmodel->getAll('sanpham');
                foreach($result->result() as $_name){
                    echo $_name->tensp;
                }
            break;
            default:
                $_query;   
                $name = $this->input->post('name');
                $price = $this->input->post('price');
                if(!empty($name)){
                       $data = array('tensp' => $this->input->post('name'));
                       $_query = $this->defaultmodel->get_like($data,'sanpham');
                       
                       if($_query){
                            $search = array(
                                '_search' => $_query->result()
                            );
                            $this->load->view('home/searchresult',$search);
                        }else{
                            $this->load->view('home/404');
                        }
                   
                }else if(!empty($price)){
                        $_strquery = "SELECT * FROM fl_sanpham WHERE ".$price;
                        $_query = $this->db->query($_strquery);
                        if($_query){
                            $search = array(
                                '_search' => $_query->result()
                            );
                            $this->load->view('home/searchresult',$search);
                        }else{
                            $this->load->view('home/404');
                        }
                    
                }else{
                    $this->load->view('home/404');
                }
                
            break;
        }
    }
    
    function view_products($_cate_name){
        $config['base_url']    =   base_url()."home/products/view_products/$_cate_name/";
        if($_cate_name == 'san-pham-moi'){
            $config['total_rows']  =   $this->defaultmodel->countall('sanpham','','ma desc');
        }
        if($_cate_name == 'san-pham-noi-bat'){
            $config['total_rows']  =   $this->defaultmodel->countall('sanpham','','lanban desc');
        }
        
        $config['per_page']    =  12;    
        $config["uri_segment"] = 5;
       
        $this->pagination->initialize($config);
        $start = $this->uri->segment(5);        
        $data['pagination'] =   $this->pagination->create_links();
        $data['_content']   =   'home/view_category';
        
        if($_cate_name == 'san-pham-moi'){
            $data['_cate_data'] =  $this->defaultmodel->listall($config['per_page'],$start,'sanpham','ma desc','');
            $data['_cate_name'] = 'Sản phẩm mới';    
        }
        if($_cate_name == 'san-pham-noi-bat'){
            $data['_cate_data'] =  $this->defaultmodel->listall($config['per_page'],$start,'sanpham','lanban desc','');
            $data['_cate_name'] = 'Sản phẩm nổi bật';
        }
        
        //$data['_special_product']
        $is_ajax = $this->input->is_ajax_request();
        if($is_ajax):
            $this->load->view('home/view_category',$data);
        else: 
            $this->defaultlib->load_template('includes/default/home_template',$data);
        endif;
    }
}