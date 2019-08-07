<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
<font size="5">
<?php
date_default_timezone_set('Asia/Taipei');
include("timetest.php");
?>
    <form action="test.php" method="POST">
    <table width=400 height=300 border=2>
    <tr>
        <td align='center'>蘋果Yellow</br>
                        價格:800</br>
            <table width=350 height=250>
                <tr>
                    <td align="center"><img src=img\iphone-xr-yellow-select-201809.png width=325 height=225>
                </tr>
            </table><input type="checkbox" name="checkbox[]" value="蘋果">加入購物車</br>
                    </td>
        </td>

        <td align='center'>蘋果White</br>
                        價格:1000</br>
            <table width=350 height=250>
                <tr>
                    <td align="center"><img src=img\iphone-xr-white-select-201809.png width=325 height=225>
                </tr>
            </table><input type="checkbox" name="checkbox[]" value="蘋果">加入購物車</br>
                    </td>
        </td>
    </tr>
</table>
</br>
<input type="submit" name="submit" value="確認購買" style="width:160px;heiht:50px;">
<?php
    header('refresh:10,url="http://localhost/index.php"');
?>
</center>
</body>
</html>