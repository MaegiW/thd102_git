<?php        	
	include("../../Lib/Member.php");
    include("../../Lib/Util.php");

    //取得購物車商品--------------------------------------------
    
    //建立SQL
    $sql = "SELECT ec_cart.ID as CartID, ec_products.ID as PID, ec_cart.MID, ec_cart.QTY, ec_products.ProductName, ec_products.Price, ec_products.PictureName FROM ec_cart INNER JOIN ec_products ON ec_cart.PID = ec_products.ID where ec_products.Status = 2 and ec_cart.Status = 1 and ec_cart.MID = ? order by ec_cart.ID desc";
        
    //執行
    $statement = getPDO()->prepare($sql);
    $statement->bindValue(1 , getMemberID()); 
    $statement->execute();
    $data = $statement->fetchAll();

    //回傳json
    echo json_encode($data); 
?>