<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/22/2015
 * Time: 10:33 AM
 */
require_once('Controller/smarty.php');
class trang_chu
{
    protected $chu_thich_1=[];
    protected $chu_thich_2=[];
    protected $smarty='';
    public function trang_chu(){
        include_once('Model/m_trang_chu.php');
        $this->trang_chu=new m_trang_chu();
        $this->smarty=new smarty_shopping();

    }
    public function chu_thich()
    {
        $this->chu_thich_1=$this->trang_chu->chu_thich_1();
        $this->chu_thich_2=$this->trang_chu->chu_thich_2();

    }
    public function display()
    {
        $this->chu_thich();
        $this->smarty->assign('chu_thich_1',$this->chu_thich_1);
        $this->smarty->assign('chu_thich_2',$this->chu_thich_2);
        $this->smarty->assign('title','Trang Chủ');
        $this->smarty->display('content/v_trang_chu.tpl');
    }
}