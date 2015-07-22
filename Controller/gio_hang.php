<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/11/2015
 * Time: 2:26 PM
 */
require_once('Controller/smarty.php');
include_once ('Controller/Pager.php');
include_once('Model/san_pham/m_san_pham.php');
session_start();
class gio_hang
{
    protected $gio_hang='';
    private $smarty='';
    private $thong_tin_sp=[];
    public function __construct()
    {
        $this->smarty=new smarty_shopping();
        $this->gio_hang=new m_san_pham();
    }
    private function them_san_pham($ma_san_pham)
    {
        $ma_san_pham=explode("/",$_SESSION['ma']);
       foreach ($ma_san_pham as $ma) {
            $this->thong_tin_sp = array_merge($this->gio_hang->san_pham_theo_ma($ma),$this->thong_tin_sp);
       }

        $this->smarty->assign('gio_hang',$this->thong_tin_sp);
    }

    public function display($ma_sp)
    {
        if($ma_sp!=''){
        $_SESSION['ma']=$ma_sp.'/'.$_SESSION['ma'];}
        $this->them_san_pham($_SESSION['ma']);
        var_dump($_SESSION['ma']);

        $this->smarty->display('content/v_gio_hang.tpl');

    }
}

?>