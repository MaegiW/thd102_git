<?php    
    include("../../Lib/Util.php");

    $orderID = $_POST["OID"];

    //建立SQL
    $sql = "SELECT ec_cart.ID as CartID, ec_products.ID as PID, ec_cart.MID, ec_cart.QTY, ec_products.ProductName, ec_products.Price, ec_products.PictureName FROM ec_cart INNER JOIN ec_products ON ec_cart.PID = ec_products.ID where ec_cart.OID = ?";    
    
    //執行
    $statement = getPDO()->prepare($sql);
    $statement->bindValue(1 , $orderID);    
    $statement->execute();
    $data = $statement->fetchAll();

    //回傳json
    echo json_encode($data);
?>