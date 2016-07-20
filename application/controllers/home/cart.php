<?php 

class Cart extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('defaultmodel');
        $this->cart->product_name_rules =  "\.\:\-_ a-z0-9\pL";
    }
    
    function index(){
        $data = array(
            '_content'  => 'home/view_cart'
        );
        
        $this->defaultlib->load_template('includes/default/home_template',$data);
    }
    
    function add_cart(){
        $pid = $this->input->post("id");
        $qty = $this->input->post("quantity");
            $db_qty = $this->defaultmodel->get_row(array('ma' => $pid),'sanpham','soluong');
            if($db_qty < $qty){
                echo 'false';
            }else{
            $_query = $this->defaultmodel->get_where(array('ma' => $pid), 'sanpham',1);
        
            if(!$this->cart->contents()){
                foreach($_query->result() as $_row){
                    $data = array(
                        'id' => $pid,
                        'qty'=> $qty,
                        'price'=>$_row->giaban,
                        'name'=>$_row->tensp
                    );
     
                $this->cart->insert($data);
                }
                echo 'true';
            }else{
                foreach($this->cart->contents() as $item){
                    if($item['id'] == $pid){
                        $qty = $item['qty'] + $qty;
                        $data = array(
                            'rowid' =>  $item['rowid'],
                            'qty'   =>  $qty
                        );
                        
                        $this->cart->update($data);
                    }else{
                        foreach($_query->result() as $_row){
                            $data = array(
                                'id' => $pid,
                                'qty'=> $qty,
                                'price'=>$_row->giaban,
                                'name'=>$_row->tensp
                            );
                        
                            $this->cart->insert($data);
                        }
                    }
                }
                echo 'true';
            }
			
        }
       
       
        
    }/** end of function add_cart*/
    
    function empty_cart($_action = '',$id='',$qty=''){
        if($_action == 'remove'){
            $data = array(
                'rowid' => $id,
                'qty'   => $qty
            );
            $this->cart->update($data);
            $this->index();
        }else{
            $this->cart->destroy();
            $this->index();    
        }
        
    }
    function update_cart(){
        $total = $this->cart->total_items();
		
		// Retrieve the posted information
		$item = $this->input->post('rowid');
	    $qty = $this->input->post('qty');

		// Cycle true all items and update them
		for($i=0;$i < $total;$i++)
		{
			// Create an array with the products rowid's and quantities. 
			if(!empty($item[$i]) && !empty($qty[$i])){
                $data['rowid'] =  $item[$i];
                $data['qty']   = $qty[$i];
             
            }
            // Update the cart with the new information
			$this->cart->update($data);
		}
       
        redirect('home/cart');
    }
    
    function checkout($_action = ''){
        switch($_action){
            case 'save':
                $_place = $this->input->post('place');
                $_info = $this->input->post('info');
                $session = $this->session->userdata('fl_home_in');
                $shop_cart = array(
                    'ma_kh'     =>  $session['id'],
                    'ngaytao'   =>  date('d-m-Y'),
                    'noinhan'   =>  $_place,
                    'nguoinhan' =>  $_info
                );
                $_order_query = $this->defaultmodel->insertdb($shop_cart,'donhang');
                if($_order_query){
                    $_order_id = $this->defaultmodel->get_row_limit(array('ma_kh'=> $shop_cart['ma_kh'],'ngaytao'=>$shop_cart['ngaytao']),'donhang','ma',1,'ma desc');
                    
                    if($cart = $this->cart->contents()){
                        foreach($cart as $order_detail){
                            $this->defaultmodel->update_sell_time($order_detail['id']);
                            $_order_detail = array(
                                'masp'      =>  $order_detail['id'],
                                'soluong'   =>  $order_detail['qty'],
                                'giathanh'  =>  $order_detail['price'],
                                'ma_donhang'=>  $_order_id,
                                'ngaytao'   =>  date('d-m-Y'),
                                'trangthai' =>  'Chờ xử lý',
                                'thanhtien' =>  ($order_detail['qty'] * $order_detail['price'])
                            );
                            
                            $this->defaultmodel->insertdb($_order_detail,'chitiet_donhang');
                        }
                    }
                    $this->empty_cart();
                    echo 'true';
                }else{
                    echo 'false';
                }
                
            break;
                
            default:
                $this->defaultlib->load_template('includes/default/home_template',array('_content' => 'home/shop_cart'));
            break;
        }
        
    }
    
    function view_order(){
        $session = $this->session->userdata('fl_home_in');
        $_result = $this->defaultmodel->get_order($session['id']);
        $data = array(
            '_content'  =>  'home/view_order',
            '_order'     =>  $_result->result()
        );
        
        $this->defaultlib->load_template('includes/default/home_template',$data);
    }
    
}