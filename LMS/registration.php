<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    

  <style type="text/css">
    body{
      font-family:Times new roman;
    }
    section
    {
      margin-top: -20px;
      height : 630px;
      width: 1350px;
      background-image : url("images/3.jpg");
      background-repeat : no-repeat;
    }
    .box1
{
	height: 200px;
	width: 200px;
	background-color: black;
	margin: 0px auto;
	opacity: .8;
	color: white;
  padding: 20px;
  padding-top : 150px;
}
label{
  font-weight: 600;
  font-size: 20px;
  font-family: Times new roman;
}
  </style>   
</head>
<body>

<section><br><br><br><br><br>
<div class="box">
<form  name="signup" action="" method="post">
      <b><p style="padding-left: 50px; font-size: 25px; font-weight: 700; font-family: Times new roman;">
       Sign Up as : </p></b>
      <input style="margin-left: 50px; width: 18px; font-family: Times new roman;" type="radio" name="user" 
      id="admin" value="admin">
      <label for="admin">Admin</label>
      <input style="margin-left: 50px; width: 18px; font-family: Times new roman;" type="radio" name="user" 
      id="student" value="student" checked="">
      <label for="student">Student</label><br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <button class"btn btn-default" type="submit" name="submit1"
       style="color: black; font-weight: 700; height: 30px;">
      OK</button>
</form>
</div>
</section>
<?php
 if(isset($_POST['submit1']))
 {
  if($_POST['user']=='admin')
  {
  ?>
  <script type="text/javascript">
    window.location="Admin/registration.php"
  </script>
  <?php
 }
 else{
  ?>
  <script type="text/javascript">
    window.location="Student/registration.php"
  </script>
  <?php
 }
}
?>



</body>
</html>a