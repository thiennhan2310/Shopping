<?php
include_once("../class/database.php");
$db=new Database();
$db->setQuery('select * from trang_chu');
$logo=$db->loadAllRow();
?>
    <title></title>
    <style>
        a{
            text-decoration: none;
        }
        img#banner{
            width: 50%;
            float: left;
        }
        #control{
            float:right;
        }
    </style>


<h2 align="center">THÔNG TIN TRANG CHỦ</h2>
<br/>
<h3 align="center">BANNER</h3>


<form action="./shop-control-adm.php" method="post" enctype="multipart/form-data">
    <table cellpadding="10px" cellspacing="5px">
        <tr>
            <td><img src="./images/banner1.jpg" id="banner">Banner1<br>(1541x566 px)</td>
            <td><input type="file" accept="image/jpeg" name="banner1" value="banner1.jpg"></td>
        </tr>
        <tr>
            <td><img src="./images/banner2.jpg" id="banner">Banner 2<br>(1541x566 px)</td>
            <td><input type="file" accept=".jpg" name="banner2" value="banner2.jpg"></td>
        </tr>
        <tr>
            <td><img src="./images/banner3.jpg" id="banner">Banner 3<br>(1541x566 px)</td>
            <td><input type="file" accept=".jpg" name="banner3" value="banner3.jpg"> </td>
        </tr>
    </table>
    <br/>
    <h3 align="center">LOGO SỰ KIỆN (350x356px)</h3>
    <table  border="1px solid black" cellspacing="10px" width="100%">
        <tr>
            <td>Logo 1 </td>
            <td>
                <input type="file" name="logo1" accept=".jpg" value="logo1"/>
                <br/>
                Chú Thích 1: <input type="text" name="chu_thich1" value="<?php echo $logo[3]->Chu_thich1 ?>"/>
                <br/><br/>
                Chú Thích 2: <input type="text" name="chu_thich2"  value="<?php echo $logo[3]->Chu_thich2 ?>">
            </td>
        </tr>
        <tr>
        <td>Logo 2</td>
        <td>
            <input type="file" name="logo2" accept=".jpg" value="logo2"/>
            <br/>
            Chú Thích 1: <input type="text" name="chu_thich3" value="<?php echo $logo[4]->Chu_thich1 ?>"/>
            <br/><br/>
            Chú Thích 2: <input type="text" name="chu_thich4" value="<?php echo $logo[4]->Chu_thich2 ?>">
        </td>
    </tr>
        <tr>
            <td>Logo 3</td>
            <td >
                <input type="file" name="logo3" value="logo3" accept=".jpg"/>
                <br/>
                Chú Thích 1: <input type="text" name="chu_thich5" value="<?php echo $logo[5]->Chu_thich1 ?>"/>
                <br/><br/>
                Chú Thích 2: <input type="text" name="chu_thich6" value="<?php echo $logo[5]->Chu_thich2 ?>">
            </td>
        </tr>
        <tr>
            <td>Logo 4</td>
            <td>
                 <input type="file" name="logo4" accept=".jpg" value="logo4"/>
                <br/>
                Chú Thích 1: <input type="text" name="chu_thich7" value="<?php echo $logo[6]->Chu_thich1 ?>"/>
                <br/><br/>
                Chú Thích 2: <input type="text" name="chu_thich8" value="<?php echo $logo[6]->Chu_thich2 ?>">
            </td>
        </tr>
        <tr>
            <td>Logo 5</td>
            <td>
                <input type="file" name="logo5" accept=".jpg" value="logo5"/>
                <br/>
                Chú Thích 1: <input type="text" name="chu_thich9" value="<?php echo $logo[7]->Chu_thich1 ?>"/>
                <br/><br/>
                Chú Thích 2: <input type="text" name="chu_thich10" value="<?php echo $logo[7]->Chu_thich2 ?>">
            </td>
        </tr>
        <tr>
            <td>Logo 6</td>
            <td>
                 <input type="file" name="logo6" accept=".jpg" value="logo6"/>
                <br/>
                Chú Thích 1: <input type="text" name="chu_thich11" value="<?php echo $logo[8]->Chu_thich1 ?>"/>
                <br/><br/>
                Chú Thích 2: <input type="text" name="chu_thich12" value="<?php echo $logo[8]->Chu_thich2 ?>">
            </td>
        </tr>

    </table>
    <br>
    <div id="control">
    <input type="submit" name="huy" value="Hủy"/>
    <input type="submit" name="apdung-index" value="Áp Dụng"/>
    </div>
</form>
