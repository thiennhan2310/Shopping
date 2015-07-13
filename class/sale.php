<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/13/2015
 * Time: 7:32 PM
 */
include_once('database.php');
class sale {

    protected $db='';
    public $sale=[];

    public function sale($sale=[])
    {
        $this->db=new Database();
        $this->sale=$sale;
    }
    //`Ma_Giam_Gia`, `Phan_Tram`, `Thong_Tin`, `Thoi_gian_bd`, `Thoi_gian_kt`
    public function add()
    {
        $this->db->setQuery('insert into giam_gia values(?,?,?,?,?)');
        $this->db->execute($this->sale);
    }
    public function delete()
    {
        $this->db->setQuery('delete from giam_gia where Ma_Giam_Gia="'.$this->sale[0].'"');
        $this->db->execute();
    }
    public function update()
    {
        $this->db->setQuery('update giam_gia set Ma_Giam_Gia=?,Phan_Tram=?,Thong_Tin=?,Thoi_gian_bd=?,Thoi_gian_kt=? where Ma_Giam_Gia="'.$this->sale[0].'"');
        $this->db->execute($this->sale);
    }
}

?>