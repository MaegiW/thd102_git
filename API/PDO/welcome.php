<?php
    session_start();
    if(isset($_SESSION["memberID"])){
    echo"" .$_SESSION["memberID"];
    }else{
        echo"<script> alert('請先登入唷'); location.href='./login.html';</script>";
    }


?>
<br>
<a href="./logout.php">退訓</a>