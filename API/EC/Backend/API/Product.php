<?php    
    include("../../Lib/Util.php");

    //建立SQL
    $sql = "SELECT ec_products.*, ec_category.Name as CateName FROM ec_products JOIN ec_category ON ec_products.CateID = ec_category.ID WHERE ec_products.Status > 0 ORDER BY ID DESC";
    
    //執行
    $statement = getPDO()->prepare($sql);
    $statement->execute();
    $data = $statement->fetchAll();

    //回傳json
    echo json_encode($data);
?>