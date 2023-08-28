<?php

        include("./PDO/conn.php");
   

        //建立資料庫連線物件
        $dsn = "mysql:host=".$db_host.";dbname=".$db_select.";charset=utf8";

        //建立PDO物件，並放入指定的相關資料
        $pdo = new PDO($dsn, $db_user, $db_pass);
        
        //---------------------------------------------------

        //建立SQL
        $sql = "INSERT INTO member(Account, PWD, CreateDate) VALUES (?, ?, NOW())";

        $statement = $pdo->prepare($sql);
        $statement->bindValue(1, $account);
        $statement->bindValue(2, $password);
        $statement->execute();


        //執行
        $affectedRow = $statement->execute();
        if($affectedRow > 0){
                // echo "新增成功!";
                header("Location: pdo/Select.php");
        }else{
                echo "新增失敗!";
        }

?>