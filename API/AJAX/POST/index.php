<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>

<script>
    funtion doSubmit(){
        var account =  document.getElementById('account').value;
        if (account != ""){
            fm.submit();
            // return true;
        }elsee{
            // return false;
            alert('必填唷!')
        }
    }
</script>
<body>
<h3>傳統GET/POST方式 - 連線PDO練習的Table: member</h3>
    <form name="fm" method="POST" action="index.php"> 
        姓名關鍵字: <input name="account" type="text"/>
        <input type="button" value="查詢" onclick="doSubmit();"/>
    </form>
    <p>結果: <br>
    
    <?php
        if(isset($_POST["account"])){
            $account = $_POST["account"];

            include ("../../PDO/conn.php")


        //---------------------------------------------------

        

        $sql = "SELECT * FROM member WHERE Account LIKE ?"; // 使用CONCAT來結合占位符和百分號

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
    }
    ?>

        

</body>
</html>