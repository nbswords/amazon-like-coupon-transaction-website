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

    $CouponName=$_POST["CouponName"];
    $CouponType=$_POST["CouponType"];
    $ExpiryDate=$_POST["ExpiryDate"];
    $Requirement=$_POST["Requirement"];
    $TradeLocation=$_POST["TradeLocation"];
    $Ways=$_POST["Ways"];
    $Price=$_POST["Price"];
    $Company=$_POST["company"]; 
    
    $sql = "INSERT INTO `coupon` (`CouponID`, `Name`, `CouponType`, `UploadDate`, `ExpiryDate`, `Requirement`, `ClickRate`, `TradeLocation`, `TradeWays`, `Price`, `CouponState`, `CompanyID`, `UploadID`) VALUES (NULL, '$CouponName', '$CouponType', CURRENT_TIMESTAMP, '$ExpiryDate', '$Requirement', '0', '$TradeLocation', '$Ways', '$Price', '0', '$Company', '$UploadID')";

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
