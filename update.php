<?php

require("DBconnect.php");
$pNo=$_GET["pNo"];

$SQL="SELECT * FROM photo WHERE pNo='$pNo'";

// if($result=mysqli_query($link,$SQL)){
//     while($row=mysqli_fetch_assoc($result)){
//         $ppath=$row['ppath'];
//         $pdate=$row['pdate'];
//     }
// }

?>

<h1>使用者更新</h1>

<form action="updateconfirm.php" method="post" enctype="multipart/form-data">
User Number: <?php echo $pNo;?></br>
<input type="hidden" name ="pNo" value='<?php echo $pNo;?>'>
上傳檔案:<input type="file" name="photo" accept="image/*"></br>
<input type="submit">
</form>


