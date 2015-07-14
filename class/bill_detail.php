<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/13/2015
 * Time: 8:52 PM
 */
include_once ('database.php');
class bill_detail {
    private $db='';
    private $bill_detail=[];
    public function bill_detail($Ma_Hoa_Don, $Ma_San_Pham, $Don_Gia, $So_Luong)
    {
        $this->db=new Database();
        $this->bill_detail=[$Ma_Hoa_Don, $Ma_San_Pham, $Don_Gia, $So_Luong];
    }
    //`Ma_Hoa_Don`, `Ma_San_Pham`, `Don_Gia`, `So_Luong`
    public function add()
    {
        foreach($this->bill_detail as $product)
        {
         $this->db->setQuery('insert into ct_hoadon values(?,?,?,?)');
         $this->db->execute($product);
        }
    }
    /*public function delete()
    {
        $this->db->setQuery('delete from ct_hoadon where Ma_Hoa_Don="'.$this->bill_detail[0].'"');
        $this->db->execute();
    }
    public function update()
    {
        $this->db->setQuery('update ct_hoadon set Ma_Hoa_Don=?,Tong_Tien=?,Ngay_HD=?,Ma_Khach_Hang=?,Trang_Thai=? where Ma_Hoa_Don="'.$this->bill_detail[0].'"');
        $this->db->execute($this->bill_detail);
    }*/
}

?>