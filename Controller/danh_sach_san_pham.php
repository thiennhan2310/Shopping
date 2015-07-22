<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/11/2015
 * Time: 10:32 AM
 */
require_once('Controller/smarty.php');
include_once ('Controller/Pager.php');
include_once('Model/san_pham/m_san_pham.php');
class danh_sach_san_pham
{   protected $smarty='';
    protected $pager='';
    protected $san_pham='';
    public function __construct()
    {
        $this->smarty = new smarty_shopping();
        $this->pager = new Pager();
        $this->san_pham=new m_san_pham();
    }
    private function danh_sach_san_pham()
    {
        $danh_sach=$this->san_pham->danh_sach_san_pham();
        $this->smarty->assign('ds',$danh_sach);
    }
    private function danh_sach_cung_loai($loai)
    {
        $danh_sach=$this->san_pham->san_pham_theo_loai($loai);
        $this->smarty->assign('ds',$danh_sach);
    }
    public function display($loai=NULL)
    {
        if(!is_null($loai))
        {
            $this->danh_sach_cung_loai($loai);
        }
        else
        {
            $this->danh_sach_san_pham();
        }
        $this->smarty->display('content/v_san_pham.tpl');
    }
}




?>