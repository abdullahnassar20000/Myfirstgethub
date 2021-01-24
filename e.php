<?php

$pdo=new PDO('mysql:host=localhost;port=3306;dbname=misc;','abdallah','123456');
if (isset($_POST['email']) && isset($_POST['password'])){

  $e=$_POST['email'];
  $p=$_POST['password'];

  $sql="SELECT  name from m where email='$e' AND password='$p'";
 
  $stmt=$pdo->query($sql);
  $row=$stmt->fetch(PDO::FETCH_ASSOC);
 
  



  
  }

   

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kfc</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  </head>
    <style>
body{background-color:red;
}
 .a{width:40%;
 margin-left:20px;
 margin-bottom:10px;
 
 }
 .ab{
    width:40%;
 margin-left:20px;
 margin-bottom:10px;
 height:150px;


 }
 .contactus{background-color:  coral;
height: 150px;
font-size: 50px;
text-align: center;
padding-top: 20px;
margin-top: 70px;
position:relative;
}

 p{font-size:20px;}      
    </style>
    
    <body>
<div class ="contactus">login </div>
<form action="e.php" method="POST">
    <div>
    
    <p>email:</p><input class="a" type="text" name="email">
    <p>password:</p><input class="a" type="password" name="password">
    
</div>
     <p><input type="submit" value="submit"></p>
</form>

<?php

if($row===false){
  echo "<h1> login incorrect.</h1>\n";
}else{

  echo "<p> login success . </p>\n";
}
?>
<script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>