<?php
header("Content-Type: text/html; charset=utf8");
//判斷是否有submit操作
if(!isset($_POST['submit'])){

     exit("錯誤執行");
}

$email=$_POST['email'];//post獲取表單裡的email
$password=$_POST['password'];//post獲取表單裡的password
$Repassword=$_POST['Repassword'];//post獲取表單裡面的Repassword
$username=$_POST['username'];//post獲取表單裡面的username
//判斷是否為空
if($email=="" || $password=="" || $Repassword=="" || $username==""){
  //alert
  echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."請確實填寫每一欄！"."\"".")".";"."</script>";
  //refresh
  echo "<script type='text/javascript'>";
  echo "window.location.href='./register.html'";
  echo "</script>";
  exit;
}

//判斷是否相同
else if($password != $Repassword){
  //alert
  echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."請填入相同的密碼！"."\"".")".";"."</script>";
  //refresh
  echo "<script type='text/javascript'>";
  echo "window.location.href='./register.html'";
  echo "</script>";
  exit;
}
//檢查完了才連結到資料庫
else {

    include('../php/readdb_php.php');//連結資料庫

    $query="insert into user(email,passwords,name) values('$email','$password','$username')";//向資料庫插入表單傳來的值的sql
    $result=mysqli_query($conn,$query);//執行sql

    if (!$result){
        die('Error: ' . mysqli_error($conn));//如果sql執行失敗輸出錯誤
    }
    else{
        echo "註冊成功";//成功輸出註冊成功
        header('Location:http://localhost/test/couponPage/Index.php');
    }
    mysqli_close($conn);//關閉資料庫
}
?>
