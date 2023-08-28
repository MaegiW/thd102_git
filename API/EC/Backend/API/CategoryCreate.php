<?php    
    include("../../Lib/Util.php");

    //取得POST過來的值
    $CateName = $_POST["CateName"]; //分類名稱
    $Status = $_POST["Status"];   //狀態 0:刪除, 1:下架, 2:上架

    //建立SQL
    $sql = "INSERT INTO ec_category(Name, Status, CreateDate) VALUES (?,?,NOW())";
    
    //執行
    $statement = getPDO()->prepare($sql);
    $statement->bindValue(1 , $CateName); 
    $statement->bindValue(2 , $Status);
    $statement->execute();

    //導頁    
    echo "新增分類成功!";

?>