<?php    
    include("../../Lib/Util.php");

    //取得GET過來的值
    $PID = $_GET["PID"]; //PK

    //建立SQL
    $sql = "UPDATE ec_products set Status = 0 WHERE ID = ?";
    //執行
    $statement = getPDO()->prepare($sql);
    $statement->bindValue(1 , $PID); 
    $statement->execute();

    //導頁    
    echo "<script>alert('商品已刪除!'); location.href = '../Product.html';</script>";  
?>