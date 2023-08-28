<?php
// echo "帳號: " . $account . "<br>";
// echo "密碼: " . $password;


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


    $account = $_POST["account"];
    $password = $_POST["psw"];


    //建立SQL語法
    $sql = "SELECT * FROM member 
    where Account = :account and PWD = :PWD";


    //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":account", $account);
    $statement->bindValue(":PWD", $password);
    $statement->execute();

    //抓出全部且依照順序封裝成一個二維陣列
    $data = $statement->fetchAll();

    if(count ($data) > 0){
        echo "成功囉!";
        }else{
            echo"你是誰!";
        }



    // if($data){
    //     foreach($data as $index => $row){
    //         echo $row["Account"];   //欄位名稱
    //         echo " / ";
    //         echo $row["PWD"];    //欄位名稱
    //         echo " / ";
    //         echo $row["CreateDate"];    //欄位名稱
    //             echo "<br>";
    //     }
    // }else{
    //     echo"你是誰!";

    // };


    //將二維陣列取出顯示其值
    // foreach($data as $index => $row){
    //     echo $row["Account"];   //欄位名稱
    //     echo " / ";
    //     echo $row["PWD"];    //欄位名稱
    //     echo " / ";
    //     echo $row["CreateDate"];    //欄位名稱
    //         echo "<br>";
    // }

?>