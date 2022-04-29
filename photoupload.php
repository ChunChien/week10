<?php

require("DBconnect.php");

//副檔名
$pathpart=pathinfo(($_FILES['photo']['name']));
$extname=$pathpart['extension'];
//--------

//幫檔案命名
$finalphoto="Photo_".time().".".$extname;
$now=time();
$SQL="INSERT INTO photo(ppath,pdate)VALUES('$finalphoto','$now')";

//上傳檔案
if(copy($_FILES['photo']['tmp_name'],$finalphoto)){
    if(mysqli_query($link,$SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('照片上傳成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=photolist.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('照片上傳失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=photo.php'>";
        }
}else{
    echo "<script type='text/javascript'>";
    echo "alert('照片上傳失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=photo.php'>";;
}

?>