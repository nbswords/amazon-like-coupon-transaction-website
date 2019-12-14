<?php include"../php/readdb_php.php";?>

<?php
   ob_start();
   session_start();
?>

<?php

    if (isset($_SESSION['email']))
    {
        $UploadID=$_SESSION['email'];
    }

    $CouponID=$_GET["CouponID"];
    $CouponName=$_POST["CouponName"];
    $CouponType=$_POST["CouponType"];
    $ExpiryDate=$_POST["ExpiryDate"];
    $Requirement=$_POST["Requirement"];
    $TradeLocation=$_POST["TradeLocation"];
    $Ways=$_POST["Ways"];
    $Price=$_POST["Price"];

    $sql = "UPDATE `coupon` SET `Name` = '$CouponName', `CouponType` = '$CouponType', `ExpiryDate` = '$ExpiryDate', `Requirement` = '$Requirement', `TradeLocation` = '$TradeLocation', `TradeWays` = '$Ways', `Price` = '$Price' WHERE `coupon`.`CouponID` = '$CouponID' AND `coupon`.`UploadID` = '$UploadID'";

    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    else{
        if ($conn->query($sql) === TRUE){
            echo "Modify successfully";
            header('Location:../MemberCoupon.php');
        }

        else{
            echo "Error remove record: " . $conn->error;
        }
    }
?>
