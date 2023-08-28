<?php    
    include("../../Lib/Util.php");

    //取得POST過來的值
    $CID = $_POST["CID"]; //PK

    //建立SQL
    $sql = "SELECT * FROM ec_category WHERE ID = ?";
    
    //執行
    $statement = getPDO()->prepare($sql);
    $statement->bindValue(1 , $CID);    
    $statement->execute();
    $data = $statement->fetchAll();    

    //回傳json
    echo json_encode($data);
?>