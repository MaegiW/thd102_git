<?php
    include("../../Lib/Util.php");	

    //建立SQL
    $sql = "SELECT * FROM ec_members WHERE Type = 1 and Account = ? and PWD = ?";

    //給值
    $statement = getPDO()->prepare($sql);
    $statement->bindValue(1, $_POST["account"]);
    $statement->bindValue(2, $_POST["pwd"]);
    $statement->execute();
    $data = $statement->fetchAll();

    $memberID = "";
    $memberName = "";
    foreach($data as $index => $row){
        $memberID = $row["ID"];
        $memberName = $row["Account"];
    }

    //判斷是否有會員資料?
    if($memberID != "" && $memberName != ""){

        include("../../Lib/Member.php");        
    
        //將會員資訊寫入session
        setMemberInfo($memberID, $memberName);

        //登入成功        
        echo "Y"; 

    }else{

        //登入失敗
        echo "N"; 
        
    }
?>