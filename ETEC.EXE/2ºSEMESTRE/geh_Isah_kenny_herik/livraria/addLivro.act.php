 
 <?php 
       session_start();
       extract($_POST);
       extract($_FILES);
$dir = "fotos/".md5(time()).".jpg";
require('connect.php');
$busca = mysqli_query()
 