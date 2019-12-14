<head>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
</head>
<?php include("./php/readdb_php.php")?>
<?php
    header("Content-Type: text/html; charset=utf8");
    //判斷是否有submit操作

      $where = array();
      $keyword_where = "";

      //若輸入欄有輸入東西就關鍵字查詢資料庫
      if(isset($_POST['coupon_name'])){
        $keyword_where  = " `Name` like '%".$_POST['coupon_name']."%' and ";
      }

      if(isset($_POST['fieldLimit'])){
        //若條件是全部
        //Coupon type=1的代表實體(real) , type=0的代表電子(electronics)
        if($_POST['fieldLimit'] == "all") {
          $where[] = " `Coupontype` = '0' or
                       `Coupontype` = '1' ";
        }
        //若條件不是全部
        else {
          $where[] = " `Coupontype` =".$_POST['fieldLimit'];
        }
      }

    		//build where string
    		$where_str = " WHERE ".$keyword_where.implode("And",$where);
    		//build sql
    		$sqlsearch = "SELECT `CouponID`,`Name`,`UploadDate`,`CouponState`,`UploadID`,`ExpiryDate`,`Price`  from coupon ".$where_str;

        $result=mysqli_query($conn,$sqlsearch);//執行sql

        //判斷是否搜尋成功
        if($result){
        }
    ?>
<!--Load svg-->
<svg xmlns="http://www.w3.org/2000/svg" style="display:none">
		<symbol xmlns="http://www.w3.org/2000/svg" id="icon-search-11" viewBox="0 0 40 40">
			 <path d="M15.553 31.106c8.59 0 15.553-6.963 15.553-15.553S24.143 0 15.553 0 0 6.963 0 15.553s6.963 15.553 15.553 15.553zm0-3.888c6.443 0 11.665-5.222 11.665-11.665 0-6.442-5.222-11.665-11.665-11.665-6.442 0-11.665 5.223-11.665 11.665 0 6.443 5.223 11.665 11.665 11.665zM27.76 31.06c-.78-.78-.778-2.05.004-2.833l.463-.463c.783-.783 2.057-.78 2.834-.003l8.168 8.17c.782.78.78 2.05-.003 2.832l-.463.463c-.783.783-2.057.78-2.833.003l-8.17-8.167z"
			    fill-rule="evenodd" />
	  </symbol>
	  <symbol xmlns="http://www.w3.org/2000/svg" id="icon-clear-2" viewBox="0 0 20 20">
			   <path d="M8.96 10L.52 1.562 0 1.042 1.04 0l.522.52L10 8.96 18.438.52l.52-.52L20 1.04l-.52.522L11.04 10l8.44 8.438.52.52L18.96 20l-.522-.52L10 11.04l-8.438 8.44-.52.52L0 18.96l.52-.522L8.96 10z" fill-rule="evenodd" />
		</symbol>
</svg>

<div class="sidebar">
<!-- novalidate = 不對輸入進行驗證-->
<form id="search_form" novalidate="novalidate" class="searchbox amazon" action="./search.php" method="POST" accept-charset="utf-8">
	<div role="search" class="amazon__wrapper">
		<!-- 條件式搜尋-->
		<div id="search_box" >
      <select name="fieldLimit" class="selectpicker">
        <option value="all" selected="selected">全部</option>
        <option value="1">實體</option>
        <option value="0">電子</option>
      </select>
    </div>

	<!-- 搜尋欄  關掉自動完成-->
	<input type="search" name="coupon_name"  autocomplete="off" required="required" class="amazon__input">
	<!-- 提交按鈕-->
	<button id="serach_submit" type="submit" class="amazon__submit" name="submit" >
			<svg role="img" aria-label="Search">
			    <use xlink:href="#icon-search-11"></use>
			</svg>
	</button>
	<!--重置按鈕-->
	<button type="reset" title="Clear the search query." class="amazon__reset">
			 <svg role="img" aria-label="Reset">
			     <use xlink:href="#icon-clear-2"></use>
			 </svg>
	</button>
	</div>
</form>
<div class="memberbar">
    <div class="pageDiv">
      <div class="w3-bar">
        <div class="function1">
            <div class="check-login">
                <a href="./couponPage/index.php" class="w3-bar-item w3-button" style="color:white;">主頁</a>
            </div>
        </div>

        <div class="function4">
            <div class="check-login">
            	<?php include("./login/check-login.php")?>
            </div>
        </div>

      </div>
    </div>
</div>

<div class="pageDiv">
<div class="Coupon_Index_list">
<table class="table table-hover" "table table-border" style="width:950px" style="height:600px">
  <?php
    $sql = "$sqlsearch";
    $result=mysqli_query($conn,$sql);

    echo "<tr>";
    echo "<td >商品名稱</td>";
    echo "<td>上傳日期</td>";
    echo "<td>目前狀態</td>";
    echo "<td>賣家</td>";
    echo "<td>期限</td>";
    echo "<td>價格</td>";
    echo "<td>操作</td>";
    echo "</tr>";

    while($row = mysqli_fetch_array($result)){
        $CouponID=$row['CouponID'];
        $Name=$row['Name'];
        $UploadDate=$row['UploadDate'];
        $CouponState=$row['CouponState'];
        $UploadID=$row['UploadID'];
        $ExpiryDate=$row['ExpiryDate'];
        $Price=$row['Price'];

      echo "<tr>";
      echo "<td>$Name</td>";
      echo "<td>$UploadDate</td>";

      if ($CouponState=='0') {  //販售中
          echo "<td bgcolor=Green>販售中</td>";
      }

      if ($CouponState=='1'){   //售出
        echo "<td bgcolor=Red>售出</td>";
      }

      if ($CouponState=='2'){   //下架中
        echo "<td bgcolor=Yellow>下架中</td>";
      }

      echo "<td>$UploadID</td>";
      echo "<td>$ExpiryDate</td>";
      echo "<td>$Price</td>";
      echo "<td>";

      if (isset($_SESSION['email'])){
				//是他的商品
				if($UploadID==$_SESSION['email']){
					echo "<button onclick=\"location.href='../member/memberCoupon.php'\">管理商品</button>";
				}
        //非販售中
				if ($CouponState!='0'){
					echo "<button>無法購買</button>";
					echo "<button onclick=\"location.href='./php/follow_php.php?CouponID={$CouponID}'\">追蹤</button>";
					echo "<button onclick=\"location.href='./CouponPage.php?CouponID={$CouponID}'\">更多</button>";
				}

				else{
					echo "<button onclick=\"location.href='./php/BuyButton_php.php?CouponID={$CouponID}'\">購買</button>";
					echo "<button onclick=\"location.href='./php/follow_php.php?CouponID={$CouponID}'\">追蹤</button>";
					echo "<button onclick=\"location.href='./CouponPage.php?CouponID={$CouponID}'\">更多</button>";
				}
			}
      //沒登入
			else{
				echo "Please Login!  ";

				echo "<button onclick=\"location.href='./CouponPage.php?CouponID={$CouponID}'\">更多</button>";
			}
			echo "</td>";
			echo "</tr>";
    }
  ?>
</table>
</div>
</div>
</div>
<!--重置按鈕的JS-->
<script type="text/javascript">
			document.querySelector('.searchbox [type="reset"]').addEventListener('click', function() {  this.parentNode.querySelector('input').focus();});
</script>

<style type="text/css">
@charset "UTF-8";
* {
    font-family:Microsoft JhengHei;
  }
    .pageDiv{
          width:750px;
          margin-left:auto;
          margin-right:auto;
          text-align:left;
      }
    .Coupon_Index_list{
      position: relative;
      height:1080px;
      width: 600px;
      top: 200px;
      right:100px;
      background:white;
      border-radius:10px;
      text-align:center;
    }

    .table{
      position: relative;
      width:1100px;
      height:1100px;
    }
.amazon {
  display: inline-block;
  position: relative;
	left:500px;
	top:20px;
  width: 600px;
  height: 39px;
  white-space: nowrap;
  box-sizing: border-box;
  font-size: 14px;
}

.amazon__wrapper {
  width: 100%;
  height: 100%;
}

.amazon__input {
  display: inline-block;
  -webkit-transition: box-shadow .4s ease, background .4s ease;
  transition: box-shadow .4s ease, background .4s ease;
  border: 0;
  border-radius: 4px;
  box-shadow: inset 0 0 0 1px #FFFFFF;
  background: #FFFFFF;
  padding: 0;
  padding-right: 75px;
  padding-left: 11px;
  width: 100%;
  height: 100%;
  vertical-align: middle;
  white-space: normal;
  font-size: inherit;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}

.amazon__input::-webkit-search-decoration, .amazon__input::-webkit-search-cancel-button, .amazon__input::-webkit-search-results-button, .amazon__input::-webkit-search-results-decoration {
  display: none;
}

.amazon__input:hover {
  box-shadow: inset 0 0 0 1px #e6e6e6;
}

.amazon__input:focus, .amazon__input:active {
  outline: 0;
  box-shadow: inset 0 0 0 1px #FFBF58;
  background: #FFFFFF;
}

.amazon__input::-webkit-input-placeholder {
  color: #AAAAAA;
}

.amazon__input::-moz-placeholder {
  color: #AAAAAA;
}

.amazon__input:-ms-input-placeholder {
  color: #AAAAAA;
}

.amazon__input::placeholder {
  color: #AAAAAA;
}

.amazon__submit {
  position: relative;
  top: 0;
  right: 0;
  left: inherit;
  margin: 0;
  border: 0;
  border-radius: 0 3px 3px 0;
  background-color: #ffbf58;
  padding: 0;
  width: 47px;
  height: 100%;
  vertical-align: middle;
  text-align: center;
  font-size: inherit;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.amazon__submit::before {
  display: inline-block;
  margin-right: -4px;
  height: 100%;
  vertical-align: middle;
  content: '';
}

.amazon__submit:hover, .amazon__submit:active {
  cursor: pointer;
}

.amazon__submit:focus {
  outline: 0;
}

.amazon__submit svg {
  width: 21px;
  height: 21px;
  vertical-align: middle;
  fill: #202F40;
}

.amazon__reset {
  display: none;
  position: absolute;
  top: 9px;
  right: 54px;
  margin: 0;
  border: 0;
  background: none;
  cursor: pointer;
  padding: 0;
  font-size: inherit;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  fill: rgba(0, 0, 0, 0.5);
}

.amazon__reset:focus {
  outline: 0;
}

.amazon__reset svg {
  display: block;
  margin: 4px;
  width: 13px;
  height: 13px;
}

.amazon__input:valid ~ .amazon__reset {
  display: block;
  -webkit-animation-name: reset-in;
          animation-name: reset-in;
  -webkit-animation-duration: .15s;
          animation-duration: .15s;
}
.sidebar{
	    position:relative;
			width:1960px;
			height:160px;
			bottom:20px;
			background-color:#202F40;
	}
@-webkit-keyframes reset-in {
  0% {
    -webkit-transform: translate3d(-20%, 0, 0);
            transform: translate3d(-20%, 0, 0);
    opacity: 0;
  }
  100% {
    -webkit-transform: none;
            transform: none;
    opacity: 1;
  }
}

@keyframes reset-in {
  0% {
    -webkit-transform: translate3d(-20%, 0, 0);
            transform: translate3d(-20%, 0, 0);
    opacity: 0;
  }
  100% {
    -webkit-transform: none;
            transform: none;
    opacity: 1;
  }
}

  #search_box{
    position: relative;
    display:inline;
  }

	.memberbar{
			position: absolute;
			width:1910px;
			top: 100px;
			background-color:white;
	}

	.function1{
			position: absolute;
			width:150px;
			left: 480px;
			background-color:#202F40;
	}
	.function2{
			position: absolute;
			width:150px;
			left: 550px;
			background-color:#202F40;
	}
	.function3{
			position: absolute;
			width:150px;
			left: 640px;
			background-color:#202F40;
	}

	.function5{
			position: absolute;
			width:150px;
			left: 730px;
			background-color:#202F40;
	}

	.function6{
			position: absolute;
			width:150px;
			left: 860px;
			background-color:#202F40;
	}

	.function4{
			position: absolute;
      color:white;
			width:150px;
			left: 1300px;
			background-color:#202F40;
	}

	.check-login{
			position: absolute;
			left: 15px;
			top: 5px;
	}

</style>
