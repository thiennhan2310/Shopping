<?php
require_once('Controller/smarty.php');
class san_pham
{
    protected $san_pham='';
    public function san_pham(){
        $this->san_pham=new M_san_pham();
        
    }
   public function trang_chu()
   {
    $smarty=new smarty_shopping();
    $smarty->assign('title','Cong ty ABAc');
    
    $smarty->display('content/v_trang_chu.tpl');
   }
}



?>