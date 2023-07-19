<DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!---- <title> Responsive Contact Us Form | ARYAN SINGh </title>--->
    <link rel="stylesheet" href="1221.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="image-box">
       <img src="images/5.jpg">
      </div>
    <form method="post">
      <div class="topic"><span>REGISTRATION</div></span>
      <div class="input-box">
        <input type="text" name="nm">
        <label>Enter your NAME</label>
      </div>
      <div class="input-box">
        <input type="text" email="pn">
        <label>Enter your EMAIL</label>
      </div>
      <div class="input-box">
        <input type="text" year="cn">
        <label>Enter YEAR</label>
      </div>
      <div class="input-box">
        <input type="text" college ="en">
        <label>Enter your COLLEGE</label>
      </div>
      <div class="input-box">
        <input type="text" event name="an">
        <label>Enter EVENT NAME</label>
      </div>
      <div class="input-box">
        <input type="text" activity name="tb">
        <label>Enter YOUR ACTIVITY NAME</label>
      </div>
      <div class="input-box">
        <input type="submit" name="sb">
      </div>
    </form>
    <?php
$con=mysqli_connect('localhost','root','Aryan@123','upllive_db');
if (isset($_POST['sb'])) {
  $nm=$_POST['nm'];
   $pn=$_POST['pn'];
    $cn=$_POST['cn'];
     $en=$_POST['en'];
      $an=$_POST['an'];
       $tb=$_POST['tb'];
       $query="INSERT INTO sunrega(nm,pn,cn,en,an,tb) VALUES('$nm','$pn','$cn','$en','$an','$tb')";
       $run=mysqli_query($con,$query);
    // code...
  </div>
  </div>
</body>
</html>
