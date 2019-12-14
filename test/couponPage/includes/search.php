<?php
  header("Content-Type: text/html; charset=utf8");
  //判斷是否有submit操作

    //若輸入欄有輸入東西就關鍵字查詢資料庫
    if(isset($_POST['coupon_name'])){
      $keyword_where  = $_POST['coupon_name'];
    }

    if(isset($_POST['fieldLimit'])){
      //若條件是全部
      //Coupon type=1的代表實體(real) , type=0的代表電子(electronics)
      if($_POST['fieldLimit'] == "electronics") {
        $where ="`CouponType`='0'";
        $sql = "SELECT * from coupon where `Name` like '%$keyword_where%' And $where";
      }

      if($_POST['fieldLimit'] == "actual") {
        $where ="`CouponType`='1'";
        $sql = "SELECT * from coupon where $keyword_where And $where";
      }
      //若條件不是全部
      else {
        $sql = "SELECT * from coupon where $keyword_where";
      }
    }
  		echo $sql."<br>";
      //連接資料庫

      $result=mysqli_query($conn,$sql);//執行sql

      //判斷是否搜尋成功
      if($result){
        echo "查詢成功";
      }

      else{
        echo "$keyword_where";
        echo "$where";
      }
?>
