<!--Load svg-->

<?php
   session_start();
   ob_start();
?>
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
<form id="search_form" novalidate="novalidate" class="searchbox amazon" action="search.php" method="POST" accept-charset="utf-8">
	<div role="search" class="amazon__wrapper">
		<!-- 條件式搜尋-->
		<div id="search_box" >
      <select name="fieldLimit" class="selectpicker">
        <option value="all" selected="selected">全部</option>
        <option value="actual">實體</option>
        <option value="electronics">電子</option>
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
                <a href="../CouponPage/index.php" class="w3-bar-item w3-button" style="color:white;">主頁</a>
            </div>
        </div>

        <div class="function2">
            <div class="check-login">
                  <a href="../member/Data.php" class="w3-bar-item w3-button" style="color:white;">查看資料</a>
            </div>
        </div>

        <div class="function3">
            <div class="check-login">
                  <a href="../member/memberData.php" class="w3-bar-item w3-button" style="color:white;">修改密碼</a>
            </div>
        </div>
        <div class="function5">
            <div class="check-login">
                  <a href="../member/memberCoupon.php" class="w3-bar-item w3-button" style="color:white;">管理商品</a>
            </div>
        </div>

        <div class="function6">
            <div class="check-login">
                  <a href="../member/MemberFollow&Messageboard.php" class="w3-bar-item w3-button" style="color:white;">查看追踪/留言</a>
            </div>
        </div>

        <div class="function7">
            <div class="check-login">
                  <a href="../member/MemberTrade.php" class="w3-bar-item w3-button" style="color:white;">交易記錄</a>
            </div>
        </div>

        <div class="function4">
            <div class="check-login">
            	<?php include("../couponPage/login/check-login.php")?>
            </div>
        </div>
      </div>
    </div>
</div>
</div>

<style type="text/css">
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
			left: 820px;
			background-color:#202F40;
	}

	.function7{
			position: absolute;
			width:150px;
			left: 950px;
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

</style>>

<!--重置按鈕的JS-->
<script type="text/javascript">
			document.querySelector('.searchbox [type="reset"]').addEventListener('click', function() {  this.parentNode.querySelector('input').focus();});
</script>
