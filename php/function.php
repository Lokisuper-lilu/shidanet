<?php
//获取jquery传递过来的值
$username = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '';
$password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';
//设置连接数据库的参数
$servername = "sh-cynosdbmysql-grp-9kt1b47u.sql.tencentcdb.com";
$usn = "shiyanshi";
$pwd = "abcd1001.";
$dbname = "forshiyanshi";
$port = "21649";
// 创建连接
$coon = new mysqli($servername, $usn, $pwd, $dbname, $port);
//Check connnection
if ($coon->connect_error) {
    die("Connection failed: " . $coon->connect_error);
}
//get data
$sql = "SELECT password FROM `Info` where username='$username'";
//get result
$result = $coon->query($sql);
if ($result->num_rows > 0 && $result->num_rows < 2) {
    while ($row = $result->fetch_assoc()) {
        if ($row["password"] == $password) {
            echo "1";
        } else {
            echo "0";
        }
    }
} else {
    echo 0;
}
// 关闭连接
$coon->close();
?>