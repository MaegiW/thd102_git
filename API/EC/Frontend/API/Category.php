<?php
    include("../../Lib/Util.php");

    //建立SQL
    $sql = "SELECT * FROM ec_category WHERE Status = 2 ORDER BY ID DESC";

    //執行
    $statement = getPDO()->prepare($sql);
    $statement->execute();
    $data = $statement->fetchAll();

    //回傳json
    echo json_encode($data);
?>