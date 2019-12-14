<?php
header("Content-Type: text/html; charset=utf8");
//判斷是否有submit操作
if($_POST['submit']){

  $where = array();
  $keyword_where = "";

  //若輸入欄有輸入東西就關鍵字查詢資料庫
  if(isset($_POST['coupon_name'])){
    $keyword_where  = " name like '%".$_POST['coupon_name']."%' and ";
  }

  if(isset($_POST['fieldLimit'])){
    //若條件是全部
    //Coupon type=1的代表實體(real) , type=0的代表電子(electronics)
    if($_POST['fieldLimit'] == "all") {
      $where[] = " Coupontype = 'electronics' or
                   Coupontype = 'real' ";
    }
    //若條件不是全部
    else {
      $where[] = " Coupontype =".$POST['fieldLimit'];
    }
  }

		//build where string
		$where_str = " WHERE ".$keyword_where.implode("And",$where);
		//build sql
		$sql = "SELECT * from coupon ".$where_str;
		echo $sql."<br>";
    //連接資料庫
    include "readdb_php.php";

    $result=mysqli_query($conn,$sql);//執行sql

    //判斷是否搜尋成功
    if($result){
      echo "查詢成功";
    }

}

?>
