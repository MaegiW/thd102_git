<?php
// 连接数据库
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 处理 POST 请求
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $keyword = $_POST["keyword"];

    // 防止 SQL 注入
    $keyword = mysqli_real_escape_string($conn, $keyword);

    // 使用 SQL LIKE 语法查询数据
    $sql = "SELECT * FROM member WHERE Account LIKE '%$keyword%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["ID"] . " - Account: " . $row["Account"] . "<br>";
        }
    } else {
        echo "No results found.";
    }
}

$conn->close();
?>