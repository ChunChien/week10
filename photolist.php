<?php
require("DBconnect.php");

$SQL="SELECT * FROM photo";

echo "<h1>我的相簿</h1>";


if($result=mysqli_query($link,$SQL)){
    echo "<table border='1' width=40%>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>";
        echo "<a href='".$row['ppath']."'>";
        echo "<img src='".$row['ppath']."'width='100%'>";
        echo "</a>";
        echo "<a href='update.php?pNo=".$row["pNo"]."'>更新照片";
        echo "</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

//回家作業:更新照片

?>