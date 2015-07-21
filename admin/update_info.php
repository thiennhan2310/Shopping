<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/20/2015
 * Time: 7:22 PM
 */
include_once ('../config.php');
$ma_sp=$_REQUEST['key'];
include_once(ROOT.'/class/database.php');
include_once(ROOT.'/smarty/libs/Smarty.class.php');
$smarty=new Smarty();
$smarty->setTemplateDir(ROOT.'/application/templates');
$smarty->setConfigDir(ROOT.'/application/configs');
$smarty->setCacheDir(ROOT.'/application/cache');
$smarty->setCompileDir(ROOT.'/application/compiles');

$db=new Database();
$db->setQuery("SELECT sp.*,l.Ten_Loai as Loai,gg.Thong_Tin as giam_gia from san_pham sp,loai l,giam_gia gg where sp.Ma_Loai=l.Ma_Loai and gg.Ma_Giam_Gia=sp.Ma_Sale and Ma_San_Pham='$ma_sp' ");
$danh_sach=$db->loadAllRow();
$smarty->assign('danh_sach',$danh_sach);
$db->setQuery('select * from loai');
$loai=$db->loadAllRow();
$smarty->assign('loai',$loai);
$db->setQuery('select * from giam_gia');
$giam_gia=$db->loadAllRow();
$smarty->assign('giam_gia',$giam_gia);
if(isset($_POST['ten_san_pham_new']))
{

    $san_pham=new stdClass();
    $san_pham->Ma_San_Pham=$_POST['ma_san_pham'];
    $san_pham->Ten_San_Pham=$_POST['ten_san_pham_new'];
    $san_pham->Loai=$_POST['loai_sp'];
    $san_pham->giam_gia=$_POST['giam_gia'];
    $san_pham->Hinh=$_POST['ten_hinh'];
    $san_pham->Gia=$_POST['gia'];
    $san_pham->Thong_Tin=$_POST['thong_tin'];
   $danh_sach=[$san_pham];

    if(isset($_FILES))
    {
        include_once(ROOT.'/class/upload.php');
        $file= new upload($_FILES['Hinh']['name']);
        $file->add_products($_POST['hinh_cu']);
    }
    $smarty->assign('result','<b style="color:red">Success</b>');
    $smarty->assign('danh_sach',$danh_sach);
    header('location: '.ROOT.'/shop-control-adm.php');
}
$smarty->display('admin/update_info.tpl');
?>


