<?php
$ten_san_pham="%".$_REQUEST['ten_san_pham']."%";
include_once('../config.php');
include_once(ROOT.'/smarty/libs/Smarty.class.php');
$smarty=new Smarty();
$smarty->setTemplateDir(ROOT.'/application/templates');
$smarty->setConfigDir(ROOT.'/application/configs');
$smarty->setCacheDir(ROOT.'/application/cache');
$smarty->setCompileDir(ROOT.'/application/compiles');

include_once(ROOT.'/class/database.php');
$db=new Database();
$db->setQuery("SELECT sp.*,l.Ten_Loai as Loai,gg.Thong_Tin as giam_gia from san_pham sp,loai l,giam_gia gg where sp.Ma_Loai=l.Ma_Loai and gg.Ma_Giam_Gia=sp.Ma_Sale and Ten_San_Pham  like '$ten_san_pham'");
$danh_sach=$db->loadAllRow();
$smarty->assign('danh_sach',$danh_sach);
$smarty->display('admin/result.tpl');
 ?>


