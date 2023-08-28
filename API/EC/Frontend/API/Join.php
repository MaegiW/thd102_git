<?php
    include("../../Lib/Util.php");    

    //建立SQL
    $sql = "INSERT INTO ec_members(Account, PWD, Type, CreateDate) VALUES (?,?,1,NOW())";

    //執行
    $statement = getPDO()->prepare($sql);

    //給值
    $statement->bindValue(1, $_POST["account"]);
    $statement->bindValue(2, $_POST["pwd"]);
    $statement->execute();

    echo "加入成功，請重新登入!"; 
?>