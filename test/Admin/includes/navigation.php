<div class="center">
    
	<div class="sidebarlogo">
		<div class="logo">
			<a href="Admin.php"><img src="./Picture/logo1.png"></a>
		</div>
	</div>

	<div class="sidebar">
		<div class="sidebar2">
		<ul class>
	        <br>
	        <a class="nav-link <?php if ($CURRENT_PAGE == "main page") {?>active<?php }?>" href="Admin.php">Admin</a>
	        </br>
	    </ul>
		</div>

		<div class="sidebar3">
			<ul class>
		        <br>
		        <a class="nav-link <?php if ($CURRENT_PAGE == "member") {?>active<?php }?>" href="member.php">Member</a>
		        </br>
		    </ul>
		</div>

		<div class="sidebar4">
		    <ul class>
		        <br>
		        <a class="nav-link <?php if ($CURRENT_PAGE == "Coupon") {?>active<?php }?>" href="Coupon.php">Coupon</a>
		        </br>
		    </ul>
		</div>
	</div>
</div>
<style>
    body{
    	margin:0;
    }

	.logo img{
		position: relative;
		width:180px;
		height:120px;
		border-radius: 10px;
		left: 15px;
		top: 20px;
	}

	.sidebarlogo{
        width:215px;
        height:160px;
        background-color:#0066ff;
        float:left;
        border-radius: 10px;
    }

	.sidebar{
		position: absolute;
        width:690px;
        height:160px;
        left: 215px;
        background-color:#0066ff;
        float:left;
        border-radius: 10px;
    }

    .sidebar2{
    	position: absolute;
        width:215px;
        height:120px;
        top:20px;
        left:20px;
        background-color:white;
        float:left;
        border-radius: 10px
    }

    .sidebar3{
    	position: absolute;
        width:215px;
        height:120px;
        top:20px;
        left:240px;
        background-color:white;
        float:left;
        border-radius: 10px
    }

    .sidebar4{
    	position: absolute;
        width:215px;
        height:120px;
        top:20px;
        left:460px;
        background-color:white;
        float:left;
        border-radius: 10px
    }

</style>