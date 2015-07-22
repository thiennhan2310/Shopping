<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/13/2015
 * Time: 2:37 PM
 * Usage: Them thong tin  san pham, khach hang vao CSDL
 */
include_once ('database.php');
include_once ('upload.php');
class products{
    protected $db='';
    protected $product=[];
    private $upload='';
    public function products($Ma_San_Pham, $Ma_Loai, $Ma_Sale, $Ten_San_Pham, $Gia, $Hinh, $Thong_Tin, $Ngay_Cap_Nhat)
    {
    $this->db=new Database();
    $this->product=[$Ma_San_Pham, $Ma_Loai, $Ma_Sale, $Ten_San_Pham, $Gia, $Hinh, $Thong_Tin, $Ngay_Cap_Nhat];
    }
    //INSERT INTO `shop`.`san_pham` (`Ma_San_Pham`, `Ma_Loai`, `Ma_Sale`, `Ten_San_Pham`, `Gia`, `Hinh`, `Thong_Tin`, `Ngay_Cap_Nhat`) VALUES ('', '', '', '', '', '', '', '')
    public function add()
    {
        $this->db->setQuery('insert into san_pham values(?,?,?,?,?,?,?,?)');
        $this->db->execute($this->product);
         $this->product[5];
        $this->upload=new upload($this->product[5]);
        $this->upload->add_products();
    }
   public function delete()
   {

       $this->db->setQuery('delete from san_pham where Ma_San_Pham="'.$this->product[0].'"');
       $this->db->execute();
       $this->upload=new upload($this->product[5]);
     /*  $this->upload->del_products();*/

   }
    public function update()
    {
        $this->db->setQuery('update san_pham set Ma_San_Pham=?,Ma_Loai=?,Ma_Sale=?,Ten_San_Pham=?,Gia=?,Hinh=?,Thong_Tin=?,Ngay_Cap_Nhat=? where Ma_San_Pham="'.$this->product[0].'"');
        $this->db->execute($this->product);
    }

}

?>
