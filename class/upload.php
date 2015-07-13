<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/13/2015
 * Time: 2:06 PM
 * Usage: upload hinh anh len website (thay đổi logo và thêm hinh ảnh sản phẩm)
 */

class upload{
    private $name='';
    private $path='./products/';

   public function upload($file)
    {
        $this->name=$file;
    }

    public function add_products()
    {

        $uploads=$this->path.$this->name;
        move_uploaded_file($_FILES['hinh']['tmp_name'],$uploads);
    }
    public function change_logo()
    {
        $uploads='./images/'.$this->name;
        move_uploaded_file($_FILES['hinh']['tmp_name'],$uploads);
    }
    public function del_products()
    {
        $uploads=$this->path.$this->name;
        unlink($uploads);
    }
}

?>