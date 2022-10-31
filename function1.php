<?php
//设置连接数据库的参数
$servername = "sh-cynosdbmysql-grp-9kt1b47u.sql.tencentcdb.com";
$username = "shiyanshi";
$password = "abcd1001.";
$dbname = "forshiyanshi";
$port = "21649";
// 创建连接
$coon = new mysqli($servername, $username, $password, $dbname, $port);
//Check connnection
if ($coon->connect_error) {
    die("Connection failed: " . $coon->connect_error);
}
//get data
$sql = "SELECT * FROM `Info`";
//get result
$result = $coon->query($sql);
//输出数据
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "username:".$row["username"] . "<br>";
        echo "password:".$row["password"] . "<br>";}
}
// 关闭连接
$coon->close();
?>