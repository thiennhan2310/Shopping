<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/19/2015
 * Time: 3:30 PM
 */
<tr>
            <td>Tên đợt giảm giá: </td>
            <td><input type="text" disabled="disabled" name="thong_tin" id="thong_tin"/></td>
        </tr>
        <tr>
            <td>Phần Trăm</td>
            <td><input type="text" disabled="disabled" name="phan_tram" id="phan_tram"/> %</td>
        </tr>
        <tr>
            <td>Ngày Bắt đầu (Y-mm-dd) </td>
            <!--http://html5pattern.com/Dates-->
            <td><input type="text" disabled="disabled" name="start" required="" id="start" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))"/> VD: 2015-02-08</td>
        </tr>
        <tr>
            <td>Ngày Kết Thúc (Y-mm-dd) </td>
            <td><input type="text" disabled="disabled" name="end" required="" id="end" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))"/> VD: 2015-02-08 </td>
        </tr>