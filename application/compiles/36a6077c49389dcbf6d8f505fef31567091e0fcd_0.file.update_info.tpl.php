<?php /* Smarty version 3.1.27, created on 2015-07-21 06:07:07
         compiled from "application\templates\admin\update_info.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1761055adc56b840615_81845257%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36a6077c49389dcbf6d8f505fef31567091e0fcd' => 
    array (
      0 => 'application\\templates\\admin\\update_info.tpl',
      1 => 1437451602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1761055adc56b840615_81845257',
  'variables' => 
  array (
    'result' => 0,
    'danh_sach' => 0,
    'loai' => 0,
    'val' => 0,
    'giam_gia' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55adc56bb5b0f0_08004935',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55adc56bb5b0f0_08004935')) {
function content_55adc56bb5b0f0_08004935 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1761055adc56b840615_81845257';
?>
<h2 align="center">THÔNG TIN SẢN PHẨM <?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {
echo $_smarty_tpl->tpl_vars['result']->value;
}?></h2>
<form id="update" action="#" method="post" enctype="multipart/form-data" >
    <table align="center" cellpadding="10px" cellspacing="0px" width="450px" height="400px">
        <tr>
            <td>Mã Sản Phẩm</td>
            <td><input type="text"  name="ma_san_pham" value="<?php echo $_smarty_tpl->tpl_vars['danh_sach']->value[0]->Ma_San_Pham;?>
" readonly="readonly"</td>
        </tr>
        <tr>
            <td>Tên Sản Phẩm</td>
            <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['danh_sach']->value[0]->Ten_San_Pham;?>
" required="" title="Nhập tên sản phẩm" name="ten_san_pham_new"</td>
        </tr>
        <tr>
            <td>Loại Sản Phẩm</td>
            <td>
                <select name="loai_sp" id="loai_sp">

                    <?php
$_from = $_smarty_tpl->tpl_vars['loai']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['val']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
$foreach_val_Sav = $_smarty_tpl->tpl_vars['val'];
?>
                        <?php if ($_smarty_tpl->tpl_vars['val']->value->Ten_Loai == $_smarty_tpl->tpl_vars['danh_sach']->value[0]->Loai) {?>
                  <option selected="" value = "<?php echo $_smarty_tpl->tpl_vars['val']->value->Ma_Loai;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value->Ten_Loai;?>
</option >
                  <?php } else { ?>
                   <option  value = "<?php echo $_smarty_tpl->tpl_vars['val']->value->Ma_Loai;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value->Ten_Loai;?>
</option >
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['val'] = $foreach_val_Sav;
}
?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Giảm Giá: </td>
            <td>
                <select name="giam_gia" id="giam_gia">

                    <?php
$_from = $_smarty_tpl->tpl_vars['giam_gia']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['val']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
$foreach_val_Sav = $_smarty_tpl->tpl_vars['val'];
?>
                        <?php if ($_smarty_tpl->tpl_vars['val']->value->Thong_Tin == $_smarty_tpl->tpl_vars['danh_sach']->value[0]->giam_gia) {?>
                            <option selected value = "<?php echo $_smarty_tpl->tpl_vars['val']->value->Ma_Giam_Gia;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value->Thong_Tin;?>
</option >
                        <?php } else { ?>
                        <option value = "<?php echo $_smarty_tpl->tpl_vars['val']->value->Ma_Giam_Gia;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value->Thong_Tin;?>
</option >
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['val'] = $foreach_val_Sav;
}
?>
                </select>
            </td>
        </tr>

        <tr>
            <td><img src="./products/<?php echo $_smarty_tpl->tpl_vars['danh_sach']->value[0]->Hinh;?>
" width="110px"></td>
            <td><input type="file" name="Hinh" required="" accept="image/jpeg" title="Thêm hình ảnh"/></td>
        </tr>
        <tr>
            <td>Giá:</td>
            <td><input type="number" name="gia" value="<?php echo $_smarty_tpl->tpl_vars['danh_sach']->value[0]->Gia;?>
" required="" title="Nhập giá sản phẩm"/></td>
        </tr>
        <tr>
            <td>Thông Tin:</td>
            <td><textarea name="thong_tin" required="" title="Thêm thông tin"><?php echo $_smarty_tpl->tpl_vars['danh_sach']->value[0]->Thong_Tin;?>
</textarea></td>
        </tr>
        <tr >
            <td colspan="2" align="center"><input type="submit" name="CapNhat" value="Cập Nhật"/></td>
        </tr>
    </table>
</form><?php }
}
?>