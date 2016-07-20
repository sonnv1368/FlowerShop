<?php 

define('PREFIX','fl_');

class Defaultmodel extends CI_Model{
    
    function __construct(){
        parent::__construct();
    }
    
     function getAll($_table){
        $result = $this->db->get(PREFIX.$_table);
            return $result;
        
    }
    
    function get_field($data = "*",$table=""){
        $this->db->select($data);
        $result = $this->db->get(PREFIX.$table);
        if($result->num_rows > 0){
            return $result;
        }
    }
    
    function get_where($_where = array(), $table="", $_limit=""){
        $this->db->where($_where);
        if(empty($_limit)){
             $result = $this->db->get(PREFIX.$table);
        }else{
             $result = $this->db->get(PREFIX.$table,$_limit);
        }
           return $result;
    }
    
    
    function get_orderby($_orderby='',$_limit='',$_table=''){
      
        $this->db->select("*");
        $this->db->from(PREFIX.$_table);
        $this->db->order_by($_orderby);
        $this->db->limit($_limit);
        $_result = $this->db->get();
        
        if($_result->num_rows > 0){
            return $_result;
        }  
    }
    
    function get_row($where=array(), $_table='', $_field=''){
        
        if(!empty($where)){
            $this->db->where($where);
        }
	    $query = $this->db->get(PREFIX.$_table);
	    $row = $query->row();
		
	   return $row->$_field;
    }
    
    function get_like($like = array(),$_table=''){
        $this->db->like($like);
        $_result = $this->db->get(PREFIX.$_table);
        
        if($_result->num_rows > 0){
            return $_result;
        }   
    }
    
    function insertdb($data = array(), $table){
        
        $result = $this->db->insert(PREFIX.$table,$data);
        if($result)
            return true;
        else
            return false;
    } 
    
    function update($data = array(), $table,$where = array()){
        
        $this->db->where($where);
        $query = $this->db->update(PREFIX.$table,$data);
        
        if($query){
            return true;
        }else{
            return false;
        }
    }
    
    function delete($_table = ""){
        $_query = $this->db->empty_table(PREFIX.$_table);
        
        if($_query)
            return true;
        else 
            return false;
    }
    
    function delete_where($_where = array(), $_table=""){
        $this->db->where($_where);
        $query = $this->db->delete(PREFIX.$_table);
        
        if($query)
            return true;
        else    
            return false;
    }
    
    function listall($_offset, $_start,$_table,$_order,$where=array()){
        $this->db->limit($_offset,$_start);
        $this->db->order_by($_order);
        if(!empty($where)){
            $this->db->where($where);
        }
        return $this->db->get(PREFIX.$_table)->result();
    }
    
    function countall($_table,$_where=array(),$order = ''){
        $this->db->select("*");
        $this->db->from(PREFIX.$_table);
        if(!empty($_where)){
            $this->db->where($_where);
        }
        if(!empty($order)){
            $this->db->order_by($order);
        }
        $rs = $this->db->get();
        $res = $rs->num_rows();
        return $res ;
    }
    
    function get_order($_cus_id='',$_date = ''){
        $chitiet = PREFIX.'chitiet_donhang';
        $donhang = PREFIX.'donhang';
        $khachhang= PREFIX.'khachhang';
        $sanpham  = PREFIX.'sanpham';
        
        $this->db->select("$chitiet.trangthai,$donhang.nguoinhan,$donhang.ngaytao,$donhang.ma as madh,
        $chitiet.soluong,$chitiet.ma_donhang,$chitiet.ma,$donhang.noinhan,
        $chitiet.giathanh,$sanpham.tensp,$khachhang.tendaydu,$chitiet.thanhtien");
        $this->db->from($donhang);
        $this->db->join($chitiet,"$chitiet.ma_donhang = $donhang.ma");
        $this->db->join($sanpham,"$sanpham.ma = $chitiet.masp");
        $this->db->join($khachhang,"$khachhang.ma = $donhang.ma_kh");
        if(!empty($_cus_id)){
            $this->db->where(PREFIX.'donhang.ma_kh',$_cus_id);    
        }
        if(!empty($_date)){
            $this->db->where("SUBSTRING($chitiet.ngaytao,4,CHAR_LENGTH($chitiet.ngaytao))",$_date);
        }
        
        $result = $this->db->get();
        
        if($result){
            return $result;
        }
    }
    
    function get_row_limit($where=array(), $_table='', $_field='',$_limit='',$_orderby=''){
        
        if(!empty($where)){
            $this->db->where($where);
        }
        $this->db->limit($_limit);
        $this->db->order_by($_orderby);
	    $query = $this->db->get(PREFIX.$_table);
	    $row = $query->row();
		
	   return $row->$_field;
    }
    
    function get_import_product($date,$today,$ma){
        $where = array(
           // 'SUBSTRING(ngaynhap,4,CHAR_LENGTH(ngaynhap)) >' => $date,
           // 'SUBSTRING(ngaynhap,4,CHAR_LENGTH(ngaynhap)) <='=>$today,
            'ma_sp' => $ma
        );
        $this->db->select("sum(soluong) as soluong, ma_sp");
        $this->db->from(PREFIX."nhaphang");
        $this->db->where($where);
        $this->db->group_by("ma_sp");
        
        $_query = $this->db->get();
        return $_query->result(); 
    }
    
    function get_product_qty($date,$today,$ma){
         $where = array(
           // 'SUBSTRING(ngaynhap,4,CHAR_LENGTH(ngaynhap)) >' => $date,
          //  'SUBSTRING(ngaynhap,4,CHAR_LENGTH(ngaynhap)) <='=>$today,
            'masp' => $ma
        );
        $this->db->select("sum(soluong) as soluong, masp");
        $this->db->from(PREFIX."chitiet_donhang");
        $this->db->where($where);
        $this->db->group_by("masp");
        
        $_query = $this->db->get();
        return $_query->result(); 
    }
    
    function get_revenue_month($_date,$field,$_sum,$_table){
        $where = array(
            "SUBSTRING($field,4,CHAR_LENGTH($field))" => $_date
        );
        
        $this->db->select("SUM($_sum) AS $_sum");
        $this->db->from(PREFIX."$_table");
        $this->db->where($where);
        $_query = $this->db->get();
        $_rows = $_query->row();
        
        return $_rows->$_sum;
    }
    
    function get_revenue_quarter($_start,$_end,$field,$_sum,$_table){
        $where = array(
            "SUBSTRING($field,4,CHAR_LENGTH($field)) >=  "=>$_start,
            "SUBSTRING($field,4,CHAR_LENGTH($field)) <= "=>$_end
        );
        $this->db->select("SUM($_sum) AS $_sum");
        $this->db->from(PREFIX."$_table");
        $this->db->where($where);
        
        $_query = $this->db->get();
        $_rows = $_query->row();
        
        return $_rows->$_sum;
    }
    
    function get_revenue_year($_year,$_field,$_sum,$_table){
        $where = array(
            "SUBSTRING($_field,7,CHAR_LENGTH($_field))" => $_year
        );
        
        $this->db->select("SUM($_sum) AS $_sum");
        $this->db->from(PREFIX."$_table");
        $this->db->where($where);
        
        $_query = $this->db->get();
        $_rows = $_query->row();
        
        return $_rows->$_sum;
    }
    
    function get_order_statistic($_date){
        $chitiet = PREFIX.'chitiet_donhang';
        $sanpham  = PREFIX.'sanpham';
        $nhaphang = PREFIX.'nhaphang';
        
        $this->db->select("SUM($chitiet.soluong) AS soluong,$nhaphang.giatien,$chitiet.masp,
        $chitiet.giathanh,$sanpham.tensp,SUM($chitiet.thanhtien) AS thanhtien");
        $this->db->from($chitiet);
        $this->db->join($sanpham,"$sanpham.ma = $chitiet.masp");
        $this->db->join($nhaphang,"$nhaphang.ma_sp = $chitiet.masp");
        $this->db->group_by("$chitiet.masp");
		$this->db->where("SUBSTRING($chitiet.ngaytao,4,CHAR_LENGTH($chitiet.ngaytao))",$_date);
        $_query = $this->db->get();
        
        return $_query->result();
    }
    
    function get_order_quarter($start,$end){
        $chitiet = PREFIX.'chitiet_donhang';
        $sanpham  = PREFIX.'sanpham';
        $nhaphang = PREFIX.'nhaphang';
         $where = array(
            "SUBSTRING($chitiet.ngaytao,4,CHAR_LENGTH($chitiet.ngaytao)) >=  "=>$start,
            "SUBSTRING($chitiet.ngaytao,4,CHAR_LENGTH($chitiet.ngaytao)) <= "=>$end
        );
        $this->db->select("SUM($chitiet.soluong) AS soluong,$nhaphang.giatien,$chitiet.masp,
        $chitiet.giathanh,$sanpham.tensp,SUM($chitiet.thanhtien) AS thanhtien");
        $this->db->from($chitiet);
        $this->db->join($sanpham,"$sanpham.ma = $chitiet.masp");
        $this->db->join($nhaphang,"$nhaphang.ma_sp = $chitiet.masp");
        $this->db->group_by("$chitiet.masp");
		$this->db->where($where);
        $_query = $this->db->get();
        
        return $_query->result();
    }
    
    function get_order_year($_year){
        $chitiet = PREFIX.'chitiet_donhang';
        $sanpham  = PREFIX.'sanpham';
        $nhaphang = PREFIX.'nhaphang';
         $where = array(
            "SUBSTRING($chitiet.ngaytao,7,CHAR_LENGTH($chitiet.ngaytao))"=>$_year
        );
        $this->db->select("SUM($chitiet.soluong) AS soluong,$nhaphang.giatien,$chitiet.masp,
        $chitiet.giathanh,$sanpham.tensp,SUM($chitiet.thanhtien) AS thanhtien");
        $this->db->from($chitiet);
        $this->db->join($sanpham,"$sanpham.ma = $chitiet.masp");
        $this->db->join($nhaphang,"$nhaphang.ma_sp = $chitiet.masp");
        $this->db->group_by("$chitiet.masp");
		$this->db->where($where);
        $_query = $this->db->get();
        
        return $_query->result();
    }
    
    function update_sell_time($_id){
        $where = array(
            'ma' => $_id
        );
        $this->db->where($where);
	    $query = $this->db->get(PREFIX.'sanpham');
	    $row = $query->row();
        $field = "lanban";
        $sell_time = $row->$field;
        $sell_time = $sell_time + 1;
        
        $this->db->update(PREFIX.'sanpham',array('lanban'=>$sell_time),array('ma'=>$_id));
        
    }
}