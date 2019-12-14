<?php include"../php/readdb_php.php";?>

<?php
   ob_start();
   session_start();
?>

<?php

    if (isset($_SESSION['email']))
    {
        $User=$_SESSION['email'];
        $newPasswords1=$_POST["newPasswords1"];
        $newPasswords2=$_POST["newPasswords2"];
        $Name=$_POST["Name"];
    }

    if ($newPasswords2 != $newPasswords1) {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."密碼不一致！"."\"".")".";"."</script>";
            echo "<script type='text/javascript'>";
            echo "window.location.href='../MemberData.php'";
            echo "</script>";
    }

    else{
        $sql = "UPDATE `user` SET `Name` = '$Name', `Passwords` = '$newPasswords1' WHERE `Email` = '$User'";
        if (!$conn){
                die("Connection failed: " . mysqli_connect_error());
            }

        else{
            if ($conn->query($sql) === TRUE){
                echo "Modify successfully";
                header('Location:../MemberData.php');
            }

            else{
                echo "Error remove record: " . $conn->error;
            }
        }
    }
?>
