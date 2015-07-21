<?php /* Smarty version 3.1.27, created on 2015-07-21 10:53:47
         compiled from "C:\wamp\www\Shopping\application\templates\admin\result.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1067755ae089bec53f6_75803577%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce58d94a6c3b768cba136865d009cdda2b0c2f15' => 
    array (
      0 => 'C:\\wamp\\www\\Shopping\\application\\templates\\admin\\result.tpl',
      1 => 1437468789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1067755ae089bec53f6_75803577',
  'variables' => 
  array (
    'danh_sach' => 0,
    'sp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55ae089c18ded5_80422872',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ae089c18ded5_80422872')) {
function content_55ae089c18ded5_80422872 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1067755ae089bec53f6_75803577';
?>
<table border="1px solid black" style="width: 100%;text-align: center">
    <tr>
        <td>Hình Ảnh</td>
        <td>Mã Sản Phẩm</td>
        <td>Tên Sản Phẩm</td>
        <td>Loại</td>
        <td>Giảm Giá</td>
        <td>Giá gốc</td>
        <td>Thông Tin</td>
        <td>Ngày Cập Nhật</td>
        <td>Cập Nhật</td>
    </tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['danh_sach']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
$foreach_sp_Sav = $_smarty_tpl->tpl_vars['sp'];
?>
        <tr>
            <td><img style="width: 150px;height: 115px; "src="./products/<?php echo $_smarty_tpl->tpl_vars['sp']->value->Hinh;?>
" alt=""/></td>
            <td><?php echo $_smarty_tpl->tpl_vars['sp']->value->Ma_San_Pham;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['sp']->value->Ten_San_Pham;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['sp']->value->Loai;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['sp']->value->giam_gia;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['sp']->value->Gia;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['sp']->value->Thong_Tin;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['sp']->value->Ngay_Cap_Nhat;?>
</td>
            <td><img style="cursor: pointer" id="<?php echo $_smarty_tpl->tpl_vars['sp']->value->Ma_San_Pham;?>
" width="24px" class="edit" src="./images/edit.png" alt="Sửa" title="Sửa"/> | <img src="./images/close_1.png" id="del" style="cursor: pointer"  width="24px" alt="xóa" title="xóa"/></td>
        </tr>
    <?php
$_smarty_tpl->tpl_vars['sp'] = $foreach_sp_Sav;
}
?>

</table>

<?php echo '<script'; ?>
>
    $('document').ready(function()
    {
        $.ajaxSetup({async: false});
        $(".fancybox").fancybox({
            autoDimensions: true
        });
        $('.edit').click(function()
        {
            $key=$(this).attr('id');
            /*$('#ketqua').load('./admin/products_info.php?key='+$key);*/
            $.ajax({
                type	: "POST",
                cache	: false,
                url		: "./admin/update_info.php?key="+$key,
                data		: $(this).serializeArray(),
                success: function(data) {
                    $.fancybox(data);
                }
            });
        });
        });
<?php echo '</script'; ?>
>

<?php }
}
?>