<?php    
    //請參考PDO課後作業-關鍵字查詢的Search.php
    //input your code...
    include('../../PDO/conn.php');
    $account = htmlspecialchars($_POST["account"]);
    $sql = "select * from MEMBER
    where ACCOUNT like concat('%', ?, '%')"; // 使用CONCAT來結合占位符和百分號
    //'%'-> 模糊比對 ? -> bindValue後的$account

    //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
    $statement = $pdo-> prepare($sql); 
    $statement->bindValue(1, $account); //抓到關鍵字(SQL Injection)
    $statement->execute();              //執行


    //抓出全部且依照順序封裝成一個二維陣列(data)
    $data = $statement -> fetchAll();

    //將二維陣列取出顯示其值
    if(count($data)>0){  //如果有資料
    foreach($data as $index => $row){
        echo $row["Account"];   //欄位名稱
        echo "<br>";
        echo $row["PWD"];
        echo "<br>";
        echo $row["CreateDate"];
        } 
    }else{
        echo "無相符資料";
    }
?>