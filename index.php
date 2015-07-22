<?php
include ('Controller/trang_chu.php');
include ('Controller/danh_sach_san_pham.php');

if($_GET['site']=='danh-sach-san-pham')
{
    $trang_ds=new danh_sach_san_pham();
    $trang_ds->display();
}
else //trang chu mac dinh
{
    $trang_chu=new trang_chu();
    $trang_chu->display();
}
?>