<?php
    include("../../Lib/Member.php");
    include("../../Lib/Util.php");        

    //建立SQL
    $sql = "UPDATE ec_cart set Status = 0, UpdateDate = Now() where ID= ?";
    
    //執行
    $statement = getPDO()->prepare($sql);

    //給值        
    $statement->bindValue(1 , $_POST["CID"]); 
    $statement->execute();

    echo "商品已移除!";
?>