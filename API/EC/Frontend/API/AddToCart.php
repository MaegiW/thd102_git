<?php
    include("../../Lib/Member.php");
    include("../../Lib/Util.php");        

    $PID = $_POST["PID"];
    $QTY = $_POST["QTY"];        

    //先檢查是否有[相同商品]已加入購物車
    $data = getCart($PID, getPDO(), getMemberID());

    if (count($data) > 0){

        //有->更新商品數量
        $CID = "";
        $QTY_current = "";  //原本購物車裡的數量

        foreach($data as $index => $row){        
            $CID = $row["ID"];
            $QTY_current = $row["QTY"];
        }

        //新的商品數量
        $QTY_new = $QTY + $QTY_current;

        updateCart($CID, $QTY_new, getPDO());

    }else{

        //無->單純新增
        insertCart($PID, $QTY, getPDO(), getMemberID());

    }

    echo "加入成功!";

    //---------------------------以 下 是 自 定 義 Function-------------------------

    function getCart($PID, $PDO, $memberID){

        //建立SQL
        $sql = "SELECT * from ec_cart where Status = '1' and PID = ? and MID= ?";

        //執行
        $statement = $PDO->prepare($sql);
        $statement->bindValue(1 , $PID); 
        $statement->bindValue(2 , $memberID); 
        $statement->execute();
        $data = $statement->fetchAll();

        return $data;

    }

    function updateCart($CID, $QTY, $PDO){

        //建立SQL
        $sql = "UPDATE ec_cart set QTY = ?, UpdateDate = Now() where ID= ?"; 

        //執行
        $statement = $PDO->prepare($sql);
        $statement->bindValue(1 , $QTY); 
        $statement->bindValue(2 , $CID); 
        $statement->execute();

    }

    function insertCart($PID, $QTY, $PDO, $memberID){

        //建立SQL
        $sql = "INSERT INTO ec_cart (PID, MID, QTY, CreateDate) values (?,?,?, Now())"; 

        //執行
        $statement = $PDO->prepare($sql);
        $statement->bindValue(1 , $PID); 
        $statement->bindValue(2 , $memberID); 
        $statement->bindValue(3 , $QTY);
        $statement->execute();
        
    }
    
?>