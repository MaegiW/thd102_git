<?php    
    include("../../Lib/Util.php");

    //建立SQL
    $sql = "SELECT ec_orders.*, ec_members.Account FROM ec_orders JOIN ec_members on ec_orders.MID = ec_members.ID ORDER BY ec_orders.ID DESC";
    
    //執行
    $statement = getPDO()->prepare($sql);
    $statement->execute();
    $data = $statement->fetchAll();

    //回傳json
    echo json_encode($data);
?>