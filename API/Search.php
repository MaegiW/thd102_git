<?php

//MySQL相關資訊
    $db_host = "127.0.0.1";
    $db_user = "root";
    $db_pass = "password";
    $db_select = "pdo";

    //建立資料庫連線物件
    $dsn = "mysql:host=".$db_host.";dbname=".$db_select.";charset=utf8";

    //建立PDO物件，並放入指定的相關資料
    $pdo = new PDO($dsn, $db_user, $db_pass);

    //---------------------------------------------------



$accountQ = htmlspecialchars($_POST["Account"]);


    


   $sql = "SELECT * FROM member
   WHERE Account LIKE CONCAT('%', ?, '%')"; // 使用CONCAT來結合占位符和百分號



        $statement = $pdo->prepare($sql);
        $statement->bindValue(1, $accountQ);
        $statement->execute();



        //抓出全部且依照順序封裝成一個二維陣列
        $data = $statement->fetchAll();

        //將二維陣列取出顯示其值



        
    
        if(count($data)>0){
            //如果長度大於0

            foreach($data as $index => $row){
                echo $row["Account"];   //欄位名稱
                echo " / ";
                echo $row["PWD"];    //欄位名稱
                echo " / ";
                echo $row["CreateDate"];    //欄位名稱
                    echo "<br>";
            }

            
            }else{


            echo "並無相符的會員";

        }  



    ?>