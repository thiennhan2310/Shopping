<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/13/2015
 * Time: 7:21 PM
 */
include_once('database.php');
class category {

    protected $db='';
    public $categ=[];

    public function category($categ=[])
    {
        $this->db=new Database();
        $this->categ=$categ;
    }
    public function add()
    {
        $this->db->setQuery('insert into loai values(?,?)');
        $this->db->execute($this->categ);
    }
    public function delete()
    {
        $this->db->setQuery('delete from loai where Ma_Loai="'.$this->categ[0].'"');
        $this->db->execute();
    }
    public function update()
    {
        $this->db->setQuery('update loai set Ma_Loai=?,Ten_Loai=? where Ma_Loai="'.$this->categ[0].'"');
        $this->db->execute($this->categ);
    }

}


?>