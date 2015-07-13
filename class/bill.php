<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/13/2015
 * Time: 8:37 PM
 */
include_once ('database.php');
class bill {
    private $db='';
    private $bill=[];
    public function bill($bill=[])
    {
        $this->db=new Database();
        $this->bill=$bill;
    }
    //`Ma_Hoa_Don`, `Tong_Tien`, `Ngay_HD`, `Ma_Khach_Hang`,'Trang Thai'
    public function add()
    {
        $this->db->setQuery('insert into hoa_don values(?,?,?,?,?)');
        $this->db->execute($this->bill);
    }
    public function delete()
    {
        $this->db->setQuery('delete from hoa_don where Ma_Hoa_Don="'.$this->bill[0].'"');
        $this->db->execute();
    }
    public function update()
    {
        $this->db->setQuery('update hoa_don set Ma_Hoa_Don=?,Tong_Tien=?,Ngay_HD=?,Ma_Khach_Hang=?,Trang_Thai=? where Ma_Hoa_Don="'.$this->bill[0].'"');
        $this->db->execute($this->bill);
    }
}


?>