<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/13/2015
 * Time: 4:25 PM
 */
include_once ('database.php');
class customer {
    private $db='';
    private $customer=[];
    public function customer($customer=[])
    {
        $this->db=new Database();
        $this->customer=$customer;
    }
    //`Ma_Khach_Hang`, `ID`, `PW`, `Ten_Khach_Hang`, `Dia_Chi`, `So_Dien_Thoai`, `Email`
    public function add()
    {
        $this->db->setQuery('insert into khach_hang values(?,?,?,?,?,?,?)');
        $this->db->execute($this->customer);
    }
    public function delete()
    {
        $this->db->setQuery('delete from khach_hang where Ma_Khach_Hang="'.$this->customer[0].'"');
        $this->db->execute();
    }
    public function update()
    {
        $this->db->setQuery('update khach_hang set Ma_Khach_Hang=?,ID=?,PW=?,Ten_Khach_Hang=?,Dia_Chi=?,So_Dien_Thoai=?,Email=? where Ma_Khach_Hang="'.$this->customer[0].'"');
        $this->db->execute($this->customer);
    }
}


?>