<?php
    require("DBconnect.php");
    $pNo=$_POST["pNo"];
    $pathpart=pathinfo(($_FILES['photo']['name']));
    $extname=$pathpart['extension'];
    //--------

    //幫檔案命名
    $finalphoto="Photo_".time().".".$extname;
    $now=time();
    $SQL="UPDATE photo SET ppath='$finalphoto',pdate='$now' WHERE pNo='$pNo'";

    if(copy($_FILES['photo']['tmp_name'],$finalphoto)){
        if(mysqli_query($link,$SQL)){
            echo "<script type='text/javascript'>";
            echo "alert('照片更新成功');";
            echo "</script>";
            echo "<meta http-equiv='Refresh' content='0; url=photolist.php'>";
        }else{
            echo "<script type='text/javascript'>";
            echo "alert('照片更新失敗');";
            echo "</script>";
            echo "<meta http-equiv='Refresh' content='0; url=photolist.php'>";
            }
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('照片更新失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=photolist.php'>";;
    }

?>

?>