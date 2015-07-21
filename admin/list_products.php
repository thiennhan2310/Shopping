<script>
    $('document').ready(function () {
        $('#tim').click(function () {
            $page='./admin/result.php?ten_san_pham='+$('#san_pham').val();
            $('div #result').load($page);
        });
    });
</script>
<h2>THÔNG TIN SẢN PHẨM</h2>
    Tên Sản Phẩm: <input type="text" required="" id="san_pham" placeholder="nhập tên sản phẩm"/>
    <button id="tim">Tìm</button>
<hr/>
<div id="result">

</div>

