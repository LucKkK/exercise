	<meta charset="utf-8">
<?php
// 创建链接
$conn = new mysqli("localhost", "root", "", "test");
// 检查链接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$a=0;
$b="JHM";
for ($i=0; $i < 2000; $i++) { 
	
	$a+=1;
	$b="JHM"."$a";
	$sql = "INSERT INTO exercies (id,code)
	VALUES ('$a', '$b' );";
	$conn->multi_query($sql);
}


$conn->close();


// $conn=mysql_connect('localhost','root',''); //连接数据库
// mysql_select_db('tongqiong',$conn);
// mysql_query("SET NAMES utf8");
 
// $fp_in = fopen('F:/sql/www.tongqiong.com.txt', "r");
// while (!feof($fp_in)) {
//     $line = fgets($fp_in);
//     //$u=explode('# ', $line);//如果有分割
//     mysql_query("INSERT INTO `user` (title)VALUES('trim($line)')",$conn); 
// }
// echo 'OK';

// $file = fopen("newfile.txt", "r") or exit("无法打开文件!");
// // 读取文件每一行，直到文件结尾
// while(!feof($file))
// {	
//     $kk=fgets($file);
//     echo $kk;
//     echo "<br>";
//    // var_dump($kk);
// }
//  $luc=explode(" ",$kk);
// 	print_r($luc);
// 	echo "</br>";
// fclose($file);
// // $conn=new mysqli('localhost','root','','test');
// // if ($conn->connect_error) {
// 	// die("连接失败:".$conn->connect_error);
// // }
// foreach ($luc as $value => $key) {
// 	echo $key;
// 	echo "</br>";
// 	echo "</br>";
// 	echo $value;
// 	echo "</br>";
// 	// $sql="INSERT INTO exercies(id,code)
// 	// VALUES($key,$value);";
// }
	// $conn->close();

// $lines = file("11.txt");
// foreach ($lines as $line) {
//  $line = rtrim($line);
//  print_r("$line\n");
//  echo "</br>";
//  // more statements...
// }

//创建激活码
// $myfile = fopen("/Applications/XAMPP/xamppfiles/htdocs/EX/newfile.txt", "w");
// 	$txt="JHM";
// 	for ($i=0; $i < 10; $i++) { 
// 		$txt="JHM"."$i ";
// 		fwrite($myfile, $txt);
// 	}
// fclose($myfile);
?>