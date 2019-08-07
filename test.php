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
    購買確認</br>
    您確定要購買以下項目嗎?</br>
    <?php
        if(empty($_POST["checkbox"])){
            echo "沒有購買任何商品";
        }

        else {
            $i=0;
            while($i<count($_POST["checkbox"])){
                echo $i+1,".",$_POST["checkbox"][$i];
                $i++;
                echo "<br>";
            }
        }
    ?>
</br></br>

<form action="finsh.php" method="POST">
<input type="submit" name="surToSubmit" value="確定提交"></form>

<form action="index1.php" method="POST">
<input type="submit" name="cancel" value="重新選擇"></form>
</center>
</body>
</html>