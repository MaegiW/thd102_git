<?php
    include("../../Lib/Member.php");

    //清空session
    clearSession();

    echo "<script>alert('登出成功!'); location.href = '../Login.html';</script>";  
?>