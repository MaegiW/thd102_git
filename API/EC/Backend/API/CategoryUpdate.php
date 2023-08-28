<?php    
    include("../../Lib/Util.php");

    //取得POST過來的值
    $CID = $_POST["CID"]; //PK
    $CateName = $_POST["CateName"]; //分類名稱
    $Status = $_POST["Status"];   //狀態 0:刪除, 1:下架, 2:上架

    //建立SQL
    $sql = "UPDATE ec_category set Name = ?, Status = ?, UpdateDate = NOW() WHERE ID = ?";
    
    //執行
    $statement = getPDO()->prepare($sql);     
    $statement->bindValue(1 , $CateName); 
    $statement->bindValue(2 , $Status);
    $statement->bindValue(3 , $CID);
    $statement->execute();
    
    //導頁    
    echo "修改分類成功!";
?>