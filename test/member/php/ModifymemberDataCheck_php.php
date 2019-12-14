<?php
    if (isset($_SESSION['email']))
    {
        $User=$_SESSION['email'];
    }

    $sql = "select * from `user` where `Email` = '$User'";
    $result = mysqli_query($conn,$sql);
    $rows=mysqli_num_rows($result);
    while($row = mysqli_fetch_array($result)){
        $Name=$row['Name'];
        $Points=$row['Points'];
        $Email=$row['Email'];
    }
?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  </head>
  <body>
      <div class="container">
         <h2>修改會員資料</h2>
    <form class="form-horizontal" action='../member/php/ModifymemberData_php.php' method='post'>
           <div class="form-group">
             <label class="control-label col-sm-2" for="email">姓名:</label>
             <div class="col-sm-10">
               <?php echo "<input type='text' class='form-control' type='text' id='Name' name='Name' placeholder='會員名字' value='$Name' >"; ?>
             </div>
           </div>

           <div class="form-group">
             <label class="control-label col-sm-2" for="pwd">密碼:</label>
             <div class="col-sm-10">
               <input type="password" class="form-control" id='newPasswords1' name='newPasswords1' placeholder='輸入原有密碼或輸入新密碼'>
             </div>
           </div>


           <div class="form-group">
             <label class="control-label col-sm-2" for="pwd">重新輸入密碼:</label>
             <div class="col-sm-10">
               <input type="password" class="form-control" id='newPasswords2' name='newPasswords2' placeholder='重新輸入密碼或新密碼'>
             </div>
           </div>


           <div class="form-group">
             <div class="col-sm-offset-2 col-sm-10">
               <button type="submit" class="btn btn-default"  id='submit-button' type="submit" name="submit" value='修改'>修改</button>
             </div>
           </div>

         </form>
       </div>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
           <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
