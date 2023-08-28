<?php
    include("../../Lib/Util.php");

    //取得商品--------------------------------------------
    $CateID = isset($_POST["CID"]) ? $_POST["CID"] : "";

    //建立SQL
    $sql = "SELECT ec_products.* FROM ec_products join ec_category on ec_products.CateID = ec_category.ID WHERE ec_products.Status = 2 and ec_category.Status = 2";

    //若CateID有值->加上SQL分類條件
    if($CateID != ""){
        $sql .= " and ec_products.CateID = ?";
    }
    $sql .= " ORDER BY ec_products.ID DESC";

    //執行
    $statement = getPDO()->prepare($sql);

    //若CateID有值才加入SQL WHERE條件式裡
    if($CateID != ""){
        $statement->bindValue(1, $CateID);
    }

    //執行
    $statement->execute();
    $data = $statement->fetchAll();

    //回傳json
    echo json_encode($data);
?>