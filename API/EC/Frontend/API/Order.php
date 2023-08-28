<?php    
	include("../../Lib/Member.php");
    include("../../Lib/Util.php");

    //建立SQL
    $sql = "SELECT * FROM ec_orders WHERE MID = ? ORDER BY ID DESC";
        
    //執行
    $statement = getPDO()->prepare($sql);

    //給值
    $statement->bindValue(1 , getMemberID()); 
    $statement->execute();
    $data = $statement->fetchAll();

    //回傳json
    echo json_encode($data);
?>