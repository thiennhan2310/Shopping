<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/19/2015
 * Time: 4:36 PM
 */
include_once('database.php');
class search {
    $name='';
    public function search($ten_san_pham)
    {
       $this->name='%'.$ten_san_pham.'%';
    }
    public function execute()
    {
        $db=new Database();
        $db->setQuery("select * from san_pham where Ten_San_Pham like $this->name");
        return $db->loadAllRow();
    }
}