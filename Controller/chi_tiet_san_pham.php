<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/11/2015
 * Time: 10:46 AM
 */
require_once('Controller/smarty.php');
require_once('Model/san_pham/m_san_pham.php');
class chi_tiet{
    protected $smarty='';
    protected $chi_tiet='';
    public function __construct()
    {
        $this->smarty=new smarty_shopping();
        $this->chi_tiet=new m_san_pham();
    }
    private function san_pham_theo_ma($key)
    {

        $san_pham=$this->chi_tiet->san_pham_theo_ma($key);
        $this->smarty->assign('sp',$san_pham);

    }
    private function san_pham_cung_loai($loai,$key)
    {
        $san_pham=$this->chi_tiet->san_pham_cung_loai($loai,$key);
        $this->smarty->assign('sp_cung_loai',$san_pham);
    }
    public function display($loai,$key)
    {
        $this->san_pham_theo_ma($key);
        $this->san_pham_cung_loai($loai,$key);
        $this->smarty->display('content/v_chi_tiet.tpl');
    }
}

?>