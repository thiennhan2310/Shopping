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
    {foreach $danh_sach as $sp}
        <tr>
            <td><img style="width: 150px;height: 115px; "src="./products/{$sp->Hinh}" alt=""/></td>
            <td>{$sp->Ma_San_Pham}</td>
            <td>{$sp->Ten_San_Pham}</td>
            <td>{$sp->Loai}</td>
            <td>{$sp->giam_gia}</td>
            <td>{$sp->Gia}</td>
            <td>{$sp->Thong_Tin}</td>
            <td>{$sp->Ngay_Cap_Nhat}</td>
            <td><img style="cursor: pointer" id="{$sp->Ma_San_Pham}" width="24px" class="edit" src="./images/edit.png" alt="Sửa" title="Sửa"/> | <img src="./images/close_1.png" id="del" style="cursor: pointer"  width="24px" alt="xóa" title="xóa"/></td>
        </tr>
    {/foreach}

</table>
{literal}
<script>
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
</script>
{/literal}
