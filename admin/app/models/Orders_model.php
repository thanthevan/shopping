<?php 
/**
* 
*/
class Orders_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();

	}
	public function insert_detail_orders($id)
	{
		$data= array(
            'id_dh'=>$id,
            'create_time'=>date("Y-m-d H:i:s"),
            'update_time'=>''
			);
         
		if($this->db->insert('chitiethoadon',$data)){
          return TRUE;
        }
        return FALSE;

	}
    public function update_status_order($status,$id)
    {
    	$data = array(
    		'TrangThai'=>$status);
    	$this->db->where('id_hd',$id);
    	if($this->db->update('donhang',$data)){
            return TRUE;
        }
        return FALSE;
    }
    public function delete_status_order($id)
    {
       $this->db->where('id_hd',$id);
    	if($this->db->delete('donhang')){
            return TRUE;
        }
        return FALSE;
    }
	public function get_list_orders()
	{
		$data=array();
		$this->db->select('*');
		$this->db->from('donhang');
		$this->db->join('sach','sach.id = donhang.id_sach');
		$this->db->where('donhang.TrangThai',0);

		$data=$this->db->get()->result_array();
		$orders = array();
		foreach ($data as $k => $v) {
			$orders[$v['id_sach']]['nameBook']=$v['TenSach'];
			$orders[$v['id_sach']]['imgBook']=$v['HinhAnh'];
			$orders[$v['id_sach']]['listOrder'][]=$v;
			}
		return $orders;
	}
	function __destruct(){
        $this->db->close();
    }
}
 ?>