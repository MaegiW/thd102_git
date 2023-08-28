<?php

include("Connection.php");

     

       if(isset($_POST["Account"]) && isset($_POST["PWD"])){

              $accountQ = htmlspecialchars($_POST["Account"]);
              $passwordQ = htmlentities($_POST["PWD"]);
      
              
             $sql = "INSERT INTO member(Account, PWD, CreateDate) VALUES (?,?, NOW());";
  
             //執行
             // $affectedRow = $pdo->exec($sql);
      
             $statement = $pdo->prepare($sql);
             $statement->bindValue(1, $accountQ);
             $statement->bindValue(2, $passwordQ);
             $affectedRow = $statement->execute();
      
      
      
           
             if($affectedRow > 0){
                    echo "正確";
              //       header("Location: join.html");
             }else{
                    echo "N";
             }



       }


       





?>
