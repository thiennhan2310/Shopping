<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/13/2015
 * Time: 2:06 PM
 * Usage: upload hinh anh len website (thay đổi logo và thêm hinh ảnh sản phẩm)
 */
include_once('./config.php');
class upload{
    private $name='';
    private $path='';

   public function upload($input_name)
    {
        $this->name=$input_name;
        $this->path=ROOT.'/products/';
    }

    public function add_products($old_file=NULL)
    {
        if(!is_null($old_file)) {
            $this->del_products($old_file);
        }
        $uploads=$this->path.$this->name;
        move_uploaded_file($_FILES['Hinh']['tmp_name'],$uploads);
    }
    public function change_logo($output_name)
    {
        $uploads='./images/'.$output_name;
        unlink($uploads);
        move_uploaded_file($_FILES[$this->name]['tmp_name'],$uploads);
    }
    public function del_products($old_file=NULL)
    {
        if(!is_null($old_file)) {
            $uploads=$this->path.$old_file;
            unlink($uploads);
        }
        else{$uploads=$this->path.$this->name;
        unlink($uploads);}
    }
}

?>