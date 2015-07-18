<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/14/2015
 * Time: 3:56 PM
 */
include_once('./smarty/libs/Smarty.class.php');

$smarty=new Smarty();
$smarty->setTemplateDir('application/templates');
$smarty->setConfigDir('application/configs');
$smarty->setCacheDir('application/cache');
$smarty->setCompileDir('application/compiles');
include_once('./class/upload.php');
include_once('./class/database.php');

$db=new Database();
include_once('./class/product.php');

if(isset($_POST['apdung-index']))
{
    foreach($_FILES as $key=>$val)
    {
       if($val['error']==0)
       {
           $name=$key.'.jpg';
           $upload=new upload($key);
           $upload->change_logo($name);
       }
    }

   for($i=1;$i<=6;$i++)
    {
        $chu_thich1=2*$i-1;
         $chu_thich2=2*$i;
        $logo=[$i,$_POST['chu_thich'.$chu_thich1],$_POST['chu_thich'.$chu_thich2],'logo'.$i];
         $db->setQuery('update trang_chu set Hinh=?,Chu_thich1=?,Chu_thich2=? where Ma_hinh=?');
        $db->execute($logo);

    }
}
else if(isset($_POST['Them']))
{
    $ma_san_pham=$_POST['ma_san_pham'];
    $ten_san_pham=$_POST['ten_san_pham'];
    $loai=$_POST['loai_sp'];
    $giam_gia=$_POST['giam_gia'];
    $hinh=$_FILES['Hinh']['name'];
    $gia=$_POST['gia'];
    $thong_tin=$_POST['thong_tin'];
    if($giam_gia=='khác')
    {
        $phan_tram=$_POST['phan_tram'];
        $thong_tin=$_POST['thong_tin'];
        $start=$_POST['start'];
        $end=$_POST['end'];
        include ('./class/sale');
        $sale=new sale()
    }
    $san_pham=new products($ma_san_pham,$loai,$giam_gia,$ten_san_pham,$gia,$hinh,$thong_tin,date('Y-m-d'));
    $san_pham->add();
}



$smarty->display('admin.tpl');
?>