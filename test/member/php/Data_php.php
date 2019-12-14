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
         <h2>會員資料</h2>
           <div class="form-group">
             <label class="control-label col-sm-2" for="email">姓名:</label>
             <div class="col-sm-10">
               <?php echo "<input type='text' class='form-control' type='text' id='Name' name='Name' placeholder='會員名字' value='$Name'  disabled='disabled'><br>"; ?>
             </div>
           </div>
           

           <div class="form-group">
             <label class="control-label col-sm-2" for="pwd">點數數量:</label>
             <div class="col-sm-10">
               <?php echo "<input type='text' class='form-control' type='text' id='Points' name='Points' placeholder='點數數量' value='$Points'  disabled='disabled'><br>"; ?>
             </div>
           </div>
           <br>

           <div class="form-group">
             <label class="control-label col-sm-2" for="pwd">E-mail:</label>
             <div class="col-sm-10">
               <?php echo "<input type='text' class='form-control' type='text' id='Email' name='Email' placeholder='Email' value='$Email'  disabled='disabled'><br>"; ?>
             </div>
           </div>
       </div>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
           <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
