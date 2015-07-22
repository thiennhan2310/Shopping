<?php
/*Trang danh_sach_san_pham*/
if($_GET['site']=='danh-sach-san-pham')
{   include ('Controller/danh_sach_san_pham.php');
   if(isset($_GET['loai']));
    $loai=$_GET['loai'];

    $trang_ds=new danh_sach_san_pham();
    $trang_ds->display($loai);
}
//chi tiet san pham
else if($_GET['site']=='chi-tiet')
{
    include ('Controller/chi_tiet_san_pham.php');
    $chi_tiet=new chi_tiet();
    $chi_tiet->display($_GET['ma_loai'],$_GET['ma_san_pham']);
}
//gio-hang
else if($_GET['site']=='gio-hang')
{
    $ma_san_pham='';
    include ('Controller/gio_hang.php');
    $gio_hang=new gio_hang();
    if(isset($_GET['ma_san_pham'])) {
        $ma_san_pham = $_GET['ma_san_pham'];
    }
    if(isset($_POST['so_luong1']))
    {
        var_dump($_POST);
    }
    $gio_hang->display($ma_san_pham);
}

/*Trang chu*/
else
{
    include ('Controller/trang_chu.php');
    $trang_chu=new trang_chu();
    $trang_chu->display();
}
?>