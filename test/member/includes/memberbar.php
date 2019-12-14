<div class="memberbar">
    <div class="pageDiv">
        <div class="function1">
            <div class="check-login">
                <a href="../couponPage/Index.php">主頁</a>
            </div>
        </div>

        <div class="function2">
            <div class="check-login">
                <a href="../member/MemberData.php">個人資料</a>
            </div>
        </div>

        <div class="function3">
            <div class="check-login">
                <a href="../member/MemberCoupon.php">管理商品</a>
            </div>
        </div>

        <div class="function4">
            <div class="check-login">
                <a href="../member/MemberFollow.php">查看追蹤/交易記錄</a>
            </div>
        </div>

        <div class="function5">
            <div class="check-login">
                <a href="../member/MemberMessageboard.php">查看留言</a>
            </div>
        </div>

        <div class="function6">
            <div class="check-login">
                <?php include("../couponPage/login/check-login.php");?>
            </div>
        </div>
    </div>
</div>

<style>
    .pageDiv{
        width:750px;
        margin-left:auto;
        margin-right:auto;
        text-align:left;
    }

    .memberbar{
        position: absolute;
        width:1910px;
        height:45px;
        top: 150px;
        background-color:white;
    }

    .function1{
        position: absolute;
        width:150px;
        height:45px;
        left: 500px;
        background-color:#0066ff;
        border-radius:0px 0px 10px 10px;
    }
    .function2{
        position: absolute;
        width:150px;
        height:45px;
        left: 660px;
        background-color:#0066ff;
        border-radius:0px 0px 10px 10px;
    }
    .function3{
        position: absolute;
        width:150px;
        height:45px;
        left: 820px;
        background-color:#0066ff;
        border-radius:0px 0px 10px 10px;

    }

    .function4{
        position: absolute;
        width:150px;
        height:45px;
        left: 980px;
        background-color:#0066ff;
        border-radius:0px 0px 10px 10px;

    }

    .function5{
        position: absolute;
        width:150px;
        height:45px;
        left: 1140px;
        background-color:#0066ff;
        border-radius:0px 0px 10px 10px;

    }
    .function6{
        position: absolute;
        width:150px;
        height:45px;
        left: 1300px;
        background-color:#0066ff;
        border-radius:0px 0px 10px 10px;

    }

    .check-login{
        position: absolute;
        left: 15px;
        top: 5px;
    }

</style>
