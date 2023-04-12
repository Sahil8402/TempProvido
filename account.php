<?php
session_start();
if(isset($_SESSION["username"])){
?>
<body style="background:url('images/header-background.jpg');place-items:center;display:grid;">
<div style="margin:10px; border:2px solid blue;background-color:white;border-radius:5px; width:380px; padding:25px;"><br>
   <b>Username :</b>  <?=$_SESSION["username"]?><br><br>
   <b>Email    :</b><?=$_SESSION["email"]?><br><br>
    <center>
    <a href="logout.php"><button style="height:40px;width:150px;background-color:#59ab6e !important;border:none;">Logout</button></a>
</div>
</body>
<?php
}
?>